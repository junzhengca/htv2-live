@extends('app.layout')

@section('title', 'Home')

@section('content')

<div class="row">
    <div class="col-md-6 events-container">
        <h2 v-if="hasHappening">happening right now</h2>
        <div class="event" v-for="event in events" v-if="eventHappening(event)">
            <h3>@{{ event.name }}</h3>
            @include('partials.event_labels')
            <div class="event-timing">
                @{{ moment(event.start_time).format('dddd h:mm A') }} - @{{ moment(event.end_time).format('dddd h:mm A') }}
            </div>
        </div>
        <h2>upcoming</h2>
        <div class="mini-link">
            <a href="https://www.hackvalley2.com/#schedule" target="_blank"><span class="typcn typcn-calendar"></span> Full Schedule</a>
        </div>
        <div class="event" v-for="event in events" v-if="moment().isSameOrBefore(moment(event.start_time))">
            <h3>@{{ event.name }}</h3>
            @include('partials.event_labels')
            <div class="event-until">@{{ moment(event.start_time).fromNow() }} <span v-if="event.meta.location && event.meta.location_link == '#'">at <span class="typcn typcn-location"></span> @{{ event.meta.location }}</span></div>
            <a :href="event.meta.location_link" v-if="event.meta.location && event.meta.location_link != '#'"><div class="event-location"><span class="typcn typcn-location"></span> @{{ event.meta.location }}</div></a>
            <div class="event-timing">
                @{{ moment(event.start_time).format('dddd h:mm A') }} - @{{ moment(event.end_time).format('dddd h:mm A') }}
            </div>
        </div>
    </div>
    <div class="col-md-2 announcements-container">
        <h2><span class="typcn typcn-bell"></span></h2>
        <div v-for="announcement in announcements">
            <br>
            <hr style="opacity: 0.3;">
            <div class="announcement-time">@{{ moment(announcement.created_at).fromNow() }}</div>
            <div class="announcement-text">@{{ announcement.message }}</div>
        </div>
    </div>
    <div class="col-md-4" id="twitter-container-wrapper">
        <div id="twitter-container">
            <a class="twitter-timeline" href="https://twitter.com/hack_valley?ref_src=twsrc%5Etfw">Tweets by hack_valley</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function resizeHomeInterface(){
        let twitterWrapperWidth = $("#twitter-container-wrapper").width();
        if($(window).width() < 993){
            $("#twitter-container").css({
                'width': "auto"
            });
        } else {
            $("#twitter-container").css({
                'width': twitterWrapperWidth - 20 + "px"
            });
        }
        
    }

    // Resize UI once, then resize whenever window is resized
    $(function(){
        resizeHomeInterface();
    });
    $(window).on('resize', resizeHomeInterface);
    


    let app = new Vue({
        el: '#app',
        data: {
            events: [],
            hasHappening: false,
            announcements: []
        },
        mounted: function(){
            this.reloadEventsList();
            var self = this;
            // Reload event list every 2 seconds
            setInterval(function(){
                self.reloadEventsList();
            }, 10000);
            this.reloadAnnouncementsList();
            // Reload event list every 2 seconds
            setInterval(function(){
                self.reloadAnnouncementsList();
            }, 10000);
        },
        methods: {
            reloadEventsList: function(){
                var self = this;
                axios.get("api/events").then(function(data){
                    self.hasHappening = false;
                    self.events = data.data;
                }).catch(function(e){
                    console.log(e);
                });
            },
            eventHappening: function(event){
                if(moment().isSameOrAfter(moment(event.start_time)) && moment().isSameOrBefore(moment(event.end_time))){
                    this.hasHappening = true;
                    return true;
                }
                return false;
            },
            reloadAnnouncementsList: function(){
                var self = this;
                axios.get("api/announcements").then(function(data){
                    self.announcements = data.data.slice(0, 4);
                }).catch(function(e){
                    console.log(e);
                });
            }
        }
    });

</script>
@endsection