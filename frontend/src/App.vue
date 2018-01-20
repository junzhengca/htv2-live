<template>
    <div id="app">
        <navigation/>
        <router-view/>
    </div>
</template>

<script>
    import Navigation from './components/Navigation.vue'
    import Vue from 'vue'
    import BootstrapVue from 'bootstrap-vue'
    Vue.use(BootstrapVue)
    import 'bootstrap/dist/css/bootstrap.css'
    import 'bootstrap-vue/dist/bootstrap-vue.css'

    export default {
        name: 'App',
        components: {
            Navigation
        }
    }
</script>

<style>

</style>
