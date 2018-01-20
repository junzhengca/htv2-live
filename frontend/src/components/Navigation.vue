<template>
    <div class="navigation">
        <b-navbar toggleable="md" type="dark"  id="primary-nav">
            <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
            <b-navbar-brand href="#"><img src="static/htv_logo_white.png" height="50" /></b-navbar-brand>
            <b-collapse is-nav id="nav_collapse">
                <b-navbar-nav>
                    <b-nav-item href="http://individual.utoronto.ca/junzheng/htv2-live/" v-bind:class="{'active': this.$route.name == 'Home'}">Home</b-nav-item>
                    <b-nav-item href="#/mentors" v-bind:class="{'active': this.$route.name == 'Mentors'}">Mentors</b-nav-item>
                    <b-nav-item href="#/hardware" v-bind:class="{'active': this.$route.name == 'Hardware'}">Hardware</b-nav-item>
                    <b-nav-item href="#/resources" v-bind:class="{'active': this.$route.name == 'Resources'}">Resources</b-nav-item>
                    <b-nav-item href="#">Map</b-nav-item>
                </b-navbar-nav>

            </b-collapse>
        </b-navbar>
    </div>
</template>

<script>
    export default {
        name: 'Navigation',
        data () {
            return {}
        },
        mounted(){
            console.log(this.$route)
        }
    }
</script>

<style scoped>
    #primary-nav {
        background-color: #90A2BD;
        font-family: Montserrat,sans-serif;
    }
</style>
