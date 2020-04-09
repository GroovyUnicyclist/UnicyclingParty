<template>
    <div>
        <h1>Create New Page</h1>
        <label for="pageType">Page Type</label><br>
          <!-- <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="generic" name="pageType" value="0" v-model="pageType">
            <label class="custom-control-label" for="generic">Generic</label>
        </div> -->
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="trick" name="pageType" value="1" v-model="pageType">
            <label class="custom-control-label" for="trick">Trick</label>
        </div>
        <hr>
        <create-trick v-if="pageType==='1'" v-bind:edit="false"></create-trick>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                pageType: '0'
            }
        },
        methods: {

        },
        computed: {

        },
        watch: {

        },
    }
</script>
