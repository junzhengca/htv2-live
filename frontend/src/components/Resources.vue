<template>
    <div class="resources">
        <div class="container">
            <br>
            <h2>Resources</h2>
            <p>What you can use in your hack.</p>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <b-card bg-variant="light"
                            header=".com Domain"
                            class="default-card">
                        <img src="https://www.domain.com/static/img/domaincom/logo.svg" width="150" /><br><br>
                        <b-badge variant="secondary">Product</b-badge>
                        <b-badge variant="secondary">Web</b-badge>
                        <hr>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et malesuada fames ac turpis egestas.
                        </p>
                        <b-button variant="outline-secondary">How to Use</b-button>
                    </b-card>
                    <br>
                    <b-card bg-variant="light"
                            header="Microsoft Azure Services"
                            class="default-card">
                        <img src="https://www.onmsft.com/wp-content/uploads/2017/09/Azure-1050x437.png" width="120"/><br><br>
                        <b-badge variant="secondary">Web</b-badge>
                        <b-badge variant="secondary">Server</b-badge>
                        <hr>
                        <p class="card-text">
                            cursus turpis massa tincidunt dui ut ornare lectus sit ame porttitor leo a diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget felis eget nunc lobortis
                        </p>
                        <b-button variant="outline-secondary">How to Use</b-button>
                    </b-card>
                </div>
                <div class="col-md-6">
                    <br>
                    <b-card bg-variant="light"
                            header="GitHub"
                            class="default-card">
                        <img src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Logo.png" width="90" /><br><br>
                        <b-badge variant="secondary">Version Control</b-badge>
                        <hr>
                        <p class="card-text">
                            ligula ullamcorper malesuada proin libero nunc consequat interdum varius sit
                        </p>
                        <b-button variant="outline-secondary">How to Use</b-button>
                    </b-card>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Resources',
        data () {
            return {}
        }
    }
</script>

<style scoped>
    #primary-nav {
        background-color: #90A2BD;
    }

    .card-text {
        text-shadow: none;
        color: #738297;
    }

    .default-card {
        background-color: white !important;
        box-shadow: rgba(0,0,0,0.1) 5px 5px 10px;
        border: none;
    }

    .default-card .card-header {
        background-color: white;
        font-family: Montserrat, sans-serif;
        font-size: 18px;
        color: #738297;
        font-weight: bold;
    }

    .resources {
        padding-bottom: 20px;
    }
</style>
