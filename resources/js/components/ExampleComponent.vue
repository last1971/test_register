<template>
    <div id="app">
        <div id="nav">
            <router-link to="/">Home</router-link>
            <span v-if="isLoggedIn">
                | <router-link to="/about"> | About</router-link>
                | <a @click="logout">Logout</a>
            </span>
            <span v-else>
                | <router-link to="/register">Register</router-link>
            </span>
        </div>
        <router-view/>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        computed : {
            isLoggedIn : function(){ return this.$store.getters.isLoggedIn}
        },
        methods: {
            logout: function () {
                this.$store.dispatch('logout')
                    .then(() => {
                        this.$router.push('/login')
                    })
            }
        },
    }
</script>
