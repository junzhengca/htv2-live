<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(Request $request){
        $ch = curl_init("https://slack.com/api/chat.postMessage");
        $data = http_build_query([
            "token" => env('SLACK_KEY'),
            "channel" => env('SLACK_CHANNEL'), //"#mychannel",
            "text" => $request->input('message'), //"Hello, Foo-Bar channel message.",
            "username" => "Announcement Bot",
            "icon_url" => "https://ca.slack-edge.com/T69C9790U-U9BBSSJSW-fcce99b4ca7c-1024"
        ]);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
