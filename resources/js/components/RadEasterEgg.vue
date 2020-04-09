<template>
    <div style="text-align: right">
        <a v-if="count > 9" href="/rad"><img src="/images/rAd.png" class="pulse" style="width:75px;" alt="???"></a>
        <div v-else class="btn" v-on:click="increment()" title="???">{{this.questions}}</div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                count: 0,
                questions: "?"
            }
        },
        methods: {
            increment() {
                this.count++
                if (this.count%2 == 1)
                this.questions += "?"
            }
        },
        computed: {

        },
        watch: {

        },
    }
</script>

<style>
    .pulse {
        animation: pulse-animation 0.9s infinite ease-out;
    }

    @keyframes pulse-animation {
        0% {
            transform: scale(0); /* scaling to 0 */
        }
        50% {
            transform: scale(1.2); /* increasing the size */
        }
        70% {
            transform: scale(0.65); /* decreasing the size */
        }
        100% {
            transform: scale(0); /* seeting back to initial size */
        }
    }
</style>
