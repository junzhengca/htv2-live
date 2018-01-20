<template>
    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-9 whats-happening">
                    <h2>What's Happening</h2>
                    <br>
                    <b-alert show variant="light">
                        Welcome to HTV 2! Seems like you don't have browser notifications enabled, do you want to enable it so you will be notified about events happening during HTV 2?
                        <br>
                        <hr>
                        <b-button href="#">Sure!</b-button>
                        <b-button href="#" variant="light">No thanks</b-button>
                    </b-alert>
                    <br><br>
                    <div class="event-large event">
                        <h3>LoyaltyOne Workshop - in 30 minutes</h3>
                        <h4>5:00PM - 18:00PM</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <br>
                        <p>LoyaltyOne is holding a workshop session at IC123.</p>
                    </div>
                    <div class="event-medium event">
                        <h3>Dinner - in 5 hours</h3>
                        <h4>6:00AM - 8:00AM</h4>
                        <p>Hungry yet? Dinner will be at The Hub.</p>
                    </div>
                    <div class="event-small event">
                        <h3>Dinner - in 5 hours</h3>
                        <h4>9:00AM - 10:00PM</h4>
                        <p>Hungry yet? Dinner will be at The Hub.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="twitter-timeline">
                        <div id="twitter-timeline-child" v-bind:style="{ height: appHeight + 'px' }">
                            <a class="twitter-timeline" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw" data-chrome="nofooter noheader">Tweets by TwitterDev</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Home',
        data () {
            return {
                appHeight: 0
            }
        },
        methods: {
            onResize(event) {
                this.appHeight = window.innerHeight - 130;
            }
        },

        mounted() {
            this.onResize();
            // Register an event listener when the Vue component is ready
            window.addEventListener('resize', this.onResize)
        },

        beforeDestroy() {
            // Unregister the event listener before destroying this Vue instance
            window.removeEventListener('resize', this.onResize)
        }
    }
</script>

<style scoped>
    #twitter-timeline {
        width: 100%;
    }
    #twitter-timeline-child {
        max-height: 100vh;
        overflow-y: scroll;
        width: 100%;
        box-shadow: rgba(0,0,0,0.1) 5px 5px 20px;
        border-radius: 10px;
        overflow-x: hidden;
        padding: 20px;
        background-color: white;
    }

    ::-webkit-scrollbar {
        width: 0px;  /* remove scrollbar space */
        background: transparent;  /* optional: just make scrollbar invisible */
    }
    /* optional: show position indicator in red */
    ::-webkit-scrollbar-thumb {
        background: #FF0000;
    }
    .home {
        padding-top: 20px;
        font-family: Montserrat,sans-serif;
    }

    h3 {
        text-shadow: rgba(0,0,0,0.10) 3px 3px 10px;
        font-family: Montserrat,sans-serif;
        color: white;
        font-weight: 800;
    }

    h4 {
        text-shadow: rgba(0,0,0,0.10) 3px 3px 10px;
        font-family: Montserrat,sans-serif;
        color: white;
        font-weight: 600;
    }

    .whats-happening {
        text-align: center;
        /*padding-left: 30px;*/
        padding-right: 30px;
    }

    .event-medium {
        transform: scale(0.9);
    }

    .event-small {
        transform: scale(0.8);
    }

    .event p {
        max-width: 500px;
        display: inline-block;
    }

    .home {
        padding-bottom: 20px;
    }

    @media(max-width: 1000px){
        h2 {
            font-size: 30px;
            padding-top: 20px;
        }
    }
</style>
