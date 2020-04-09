<template>
    <div class="card" @mouseover="active=true" @mouseleave="active=false">
        <img v-if="active" src="/images/purpleorange.png" alt="Purple">
        <img v-else src="/images/orangeorange.jpg" alt="Orange">
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                active: false
            }
        },
    }
</script>
