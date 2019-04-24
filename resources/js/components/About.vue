<template>
    <div>
        <div class="btn btn-primary" @click="go">ABOUT</div>
    </div>
</template>

<script>
    export default {
        name: "About",
        methods: {
            go() {
                axios.get('api/user')
            }
        }
    }
</script>

<style scoped>

</style>