<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacebookController extends Controller
{
    public function messenger_verify(Request $request){
        $appsecret = 'EAADomyz9SzoBAFzyt5SNe2EWGZCYwiZASDkOyyXO8ZBZCOYRBZCFPCITvzvrgw8XUwrePrWxvroIi2Ov5a84EG14hReckZCgUzxmT2x5FF5VWPZAq1X1VIzWgru82i7ZCZCLhrDhZCl0ZCqZCeBCteqACy1sxhjZAUjqoGOR44Vtq1WA8l43c92tLAgJqlYwQB2ZA3GnMZD';
        $raw_post_data = $request;
        $header_signature = $headers['X-Hub-Signature'];

        // Signature matching
        $expected_signature = hash_hmac('sha1', $raw_post_data, $appsecret);

        $signature = '';
        if(
            strlen($header_signature) == 45 &&
            substr($header_signature, 0, 5) == 'sha1='
        ) {
        $signature = substr($header_signature, 5);
        }
        if (hash_equals($signature, $expected_signature)) {
        echo('SIGNATURE_VERIFIED');
}

    }
}
