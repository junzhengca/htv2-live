@extends('app.layout')

@section('title', '500 Hash')

@section('content')
    <h2>500 hash</h2>
    <p class="large-description">Enter a hash below to retrieve a letter</p>
    <input class="form-control" placeholder="Hash" id="hash-box" /><br>
    <button class="btn btn-primary" id="get-button"><span class="typcn typcn-location-arrow"></span> Submit</button>
@endsection

@section('script')

    <script>
        $("#get-button").click(function(){
            axios.get("api/hashletter/" + $("#hash-box").val()).then(function(data){
                alert("The letter is " + data.data);
                window.location.reload();
            }).catch(function(e){
                console.log(e);
                alert("Hash you entered is not valid. :(");
            })
        })
    </script>
@endsection