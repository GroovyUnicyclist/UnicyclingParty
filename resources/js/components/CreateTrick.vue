<template>
    <div>
        <h2>Trick</h2>
        <form action="/tricks">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="alts">Alternate Names</label>
                        <input v-for="(alt, index) in alts" :key="index" type="text" id="inp" class="form-control" v-model="alts[index]">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="5" id="description" required></textarea>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="categories">Categories</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:-5px">
                        <div class="col-md-12">
                            <a href="#">
                                <h5><span class="badge badge-pill badge-secondary">Flips <i class="fas fa-times" style="margin:0.25rem"></i></span></h5>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="inventor">First Landed By/Invented By</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search For Rider">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="year">Year First Landed</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            <label for="video">Reference Video<br><small>Please try to only use youtube or vimeo links if possible</small></label>
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="video">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="time">Time<br><small>minutes : seconds</small></label><br>
                            <div class="form-group form-check-inline">
                                <input type="number" class="form-control" min="0" max="59" v-model="minutes">&nbsp;:&nbsp;<input type="number" class="form-control" min="0" max="59" v-model="seconds">
                            </div>
                        </div>
                    </div>
                    <div v-if="videoEmbed" class="row" style="padding: 15px; min-width: 75%; min-height: 20vw; justify-content: center">
                        <iframe :src="videoEmbed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <button type="button" class="btn btn-primary" @click="troll=true">Submit</button><br><br>
                    <small v-if="troll" class="text-danger">Soon™</small>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                alts: [""],
                video: '',
                minutes: 0,
                seconds: 0,
                troll: false
            }
        },
        methods: {
            checkAlts() {
                for (let i = 0; i < this.alts.length-1; i++) {
                    if (this.alts[i]==="") {
                    this.alts.splice(i,1)
                }
                }
                if (this.alts[this.alts.length-1]!=="") {
                    this.alts.push("");
                }
            },
            youtubeTime(match) {
                var out = ''
                if (match[2]!=='') {
                    out = "?start=" + match[2]
                    this.minutes = Math.floor(+match[2]/60)
                    this.seconds = +match[2]%60
                    this.video = this.video.replace(/^(.*)([?][t][=]\d*)(.*)$/,'$1$3')
                    console.log(this.video)
                }
                if (!(this.minutes==0&&this.seconds==0)) {
                    out = "?start=" + (60*+this.minutes + +this.seconds)
                }
                return out
            },
            vimeoTime(match) {
                var out = ''
                if (match[2]!=='') {
                    out = match[2]
                    var times = /^.*[#][t][=](\d*)[m](\d{0,2})[s].*$/.exec(this.video)
                    this.minutes = times[1]
                    this.seconds = times[2]
                    this.video = this.video.replace(/^(.*)([#][t][=]\d*[m]\d{0,2}[s])(.*)$/,'$1$3')
                }
                if (!(this.minutes==0&&this.seconds==0)) {
                    out = "#t=" + this.minutes + "m" + this.seconds + "s"
                }
                return out
            }
        },
        computed: {
            videoEmbed() {
                if (/^.*youtu[.]?be.*$/.test(this.video)) {
                    var reg = /^.*[/=](\S{11})[?]?[t]?[=]?(\d*)[&]?.*$/
                    var match = reg.exec(this.video)
                    return match !== null ? "https://www.youtube.com/embed/" + match[1] + this.youtubeTime(match) : false
                } else if (/^.*vimeo[.]com.*$/.test(this.video)) {
                    var reg = /^.*[/](\d*)([#]?[t]?[=]?\d*[m]?\d{0,2}[s]?)$/
                    var match = reg.exec(this.video)
                    return match !== null ? "https://player.vimeo.com/video/" + match[1] + this.vimeoTime(match) : false
                }
            }
        },
        watch: {
            alts(newValue, oldValue) {
                this.checkAlts()
            }
        },
    }
</script>

<style>
    #inp {
        margin-bottom: 1rem
    }
</style>
