@extends('app.layout')

@section('title', 'Announcements')

@section('content')
    <h2>announcements</h2>
    <p class="large-description">Enable notification on your laptop or android phone to receive announcements in real-time.</p>
    <div v-for="announcement in announcements">
        <br>
        <hr style="opacity: 0.2;">
        <div class="announcement-time">@{{ moment(announcement.created_at).fromNow() }}</div>
        <div class="announcement-text" style="white-space: pre-wrap;">@{{ announcement.message }}</div>
    </div>
@endsection

@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                announcements: []
            },
            mounted: function(){
                this.reloadAnnouncementsList();
                var self = this;
                // Reload event list every 2 seconds
                setInterval(function(){
                    self.reloadAnnouncementsList();
                }, 10000);
            },
            methods: {
                reloadAnnouncementsList: function(){
                    var self = this;
                    axios.get("api/announcements").then(function(data){
                        self.announcements = data.data;
                    }).catch(function(e){
                        console.log(e);
                    });
                }
            }
        });
    </script>
@endsection