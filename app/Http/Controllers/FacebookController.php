<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacebookController extends Controller
{
    public function messenger_verify(Request $request){
        $local_verify_token=env('WEBHOOK_VERIFY_TOKEN');
        $hub_verfify_token= $request->input('hub_verify_token');
        if ($local_verify_token == $hub_verfify_token){
            return $request->input('hub_challenge');

        } else {
            return "rossz token";
        }
    }
}
