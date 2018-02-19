@extends('app.layout')

@section('title', 'Resources')

@section('content')
    <h2>resources</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-title"><span class="typcn typcn-wi-fi"></span> Wi-Fi Network</div>
                <hr class="my-5">
                <div class="card-body">
                    <b>SSID: </b> <code>UofT</code><br>
                    <b>Username: </b> <code>hackathon18</code><br>
                    <b>Password: </b> <code>HackValley18</code>
                </div>
            </div>
        </div>
    </div>
@endsection
