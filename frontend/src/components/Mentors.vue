<template>
    <div class="mentors">
        <div class="container">
            <br>
            <h2>Mentors</h2>
            <p>Stuck? Don't know how to use certain technology?<br>No worries, we have many mentors available to help you.</p>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <b-card bg-variant="light"
                            header="Priapos Brás"
                            class="default-card">
                        <img src="http://keenthemes.com/preview/metronic/theme/assets/pages/media/profile/profile_user.jpg" width="100" />
                        <b-badge variant="secondary">PHP</b-badge>
                        <b-badge variant="secondary">Node.js</b-badge>
                        <b-badge variant="secondary">HTML</b-badge>
                        <hr>
                        <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et malesuada fames ac turpis egestas.
                        </p>
                        <b-button variant="outline-secondary">Contact Me</b-button>
                    </b-card>
                    <br>
                    <b-card bg-variant="light"
                            header="Berit Simon"
                            class="default-card">
                        <img src="https://www.rd.com/wp-content/uploads/2017/09/01-shutterstock_476340928-Irina-Bg-1024x683.jpg" width="120" />
                        <b-badge variant="secondary">iOS</b-badge>
                        <b-badge variant="secondary">AWS</b-badge>
                        <hr>
                        <p class="card-text">
                            cursus turpis massa tincidunt dui ut ornare lectus sit amet est placerat in egestas erat imperdiet sed euismod nisi porta lorem mollis aliquam ut porttitor leo a diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget felis eget nunc lobortis
                        </p>
                        <b-button variant="outline-secondary">Contact Me</b-button>
                    </b-card>
                </div>
                <div class="col-md-6">
                    <br>
                    <b-card bg-variant="light"
                            header="Amirah Milka"
                            class="default-card">
                        <img src="http://i.dailymail.co.uk/i/pix/2017/04/20/13/3F6B966D00000578-4428630-image-m-80_1492690622006.jpg" width="100" />
                        <b-badge variant="secondary">Java</b-badge>
                        <b-badge variant="secondary">Golang</b-badge>
                        <hr>
                        <p class="card-text">
                            ligula ullamcorper malesuada proin libero nunc consequat interdum varius sit
                        </p>
                        <b-button variant="outline-secondary">Contact Me</b-button>
                    </b-card>
                    <br>
                    <b-card bg-variant="light"
                            header="Gordan Leif"
                            class="default-card">
                        <img src="https://i2.wp.com/hsmai-europe.com/wp-content/uploads/2017/05/20160105-Travel-Tripper-0013.1-copy-1.jpg?fit=1200%2C1200" width="100" />
                        <b-badge variant="secondary">Docker</b-badge>
                        <b-badge variant="secondary">Unity</b-badge>
                        <hr>
                        <p class="card-text">
                            nisl tincidunt eget nullam non
                        </p>
                        <b-button variant="outline-secondary">Contact Me</b-button>
                    </b-card>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Mentors',
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
    .mentors {
        padding-bottom: 20px;
    }
</style>
