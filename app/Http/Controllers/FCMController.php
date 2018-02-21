<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class FCMController extends Controller
{
    public function subscribe(Request $request){
        if($request->input('token')){
            // https://iid.googleapis.com/iid/v1/dMn_mMcZhRk:APA91bEZVS6deQ6fpM4-c2cdPlj3jJXhEXRw4DQeu0jz3vW0lCQUXTG0UkoolGAx0oE8jN28xsi1bkLbnSPSN52d3g_FTsKKcWNyZ1ckpPXz4QiOL1MACqxT_JdqMpHgDkNOdZ6F74UQ/rel/topics/htv2-live
            $client = new Client();
            $res = $client->post('https://iid.googleapis.com/iid/v1/' . $request->input('token') . '/rel/topics/' . env('FCM_TOPIC'), ['headers' =>  ['Authorization' => 'key=' . env('FCM_KEY')]]);
            if($res->getStatusCode()){
                return response([
                    'status' => 'ok'
                ], 200);
            } else {
                return response([
                    'status' => 'failed'
                ], $res->getStatusCode());
            }
        } else {
            return response([
                'status' => 'bad request'
            ], 400);
        }
    }
}
