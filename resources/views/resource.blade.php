@extends('app.layout')

@section('title', 'Resources')

@section('content')
    <h2>resources</h2>
    <div class="row">
        <div class="col-md-6">
            <br>
            <div class="card">
                <div class="card-title"><span class="typcn typcn-wi-fi"></span> Wi-Fi Network</div>
                <hr class="my-5">
                <div class="card-body">
                    <b>SSID: </b> <code>UofT</code><br>
                    <b>Username: </b> <code>hackathon18</code><br>
                    <b>Password: </b> <code>HackValley18</code>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-title">CSI Competition</div>
                <hr class="my-5">
                <div class="card-body">
                    <p>CSI is launching a Capstone Competition. Visit it here: Apply: <a href="https://goo.gl/3a5R2z">https://goo.gl/3a5R2z</a><br>
                        Selection Criteria: <a href="https://goo.gl/DG14BD">https://goo.gl/DG14BD</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <br>
            <div class="card">
                <div class="card-title">.tech Domain</div>
                <hr class="my-5">
                <div class="card-body">
                    <p>The .techsquad is offering a FREE .tech domain and the chance to win the .tech Category Prize - $250 Amazon Voucher! Cool, eh? Find out how – <a href="https://bit.ly/2EFLPN4">bit.ly/2EFLPN4</a></p>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-title">InVision License</div>
                <hr class="my-5">
                <div class="card-body">
                    <p>Simply go to <a href="https://www.invisionapp.com/signup/hackathon/hackvalley2">https://www.invisionapp.com/signup/hackathon/hackvalley2</a> and use code <code>INV-hv2</code> to signup!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
