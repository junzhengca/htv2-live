@extends('app.layout')

@section('title', 'Admin')

@section('content')
    <h2>new announcement</h2>
    <p class="large-description">Avoid using HTML or MarkDown, this announcement will be synced to Slack.</p>
    <textarea class="form-control" style="height: 200px;" id="announcement-box"></textarea>
    <hr class="my-3">
    <button class="btn btn-primary btn-lg" id="publish-button"><span class="typcn typcn-plane"></span> Publish!</button>
@endsection

@section('script')

    <script>
        $("#publish-button").click(function(){
            axios.post("api/announcements?key={{ request()->input('key') }}", {
                message: $("#announcement-box").val()
            }).then(function(data){
                console.log(data.data);
                alert("Announcement sent");
                window.location.reload();
            }).catch(function(e){
                console.log(e);
                alert("Failed to send announcement");
            })
        })
    </script>
@endsection