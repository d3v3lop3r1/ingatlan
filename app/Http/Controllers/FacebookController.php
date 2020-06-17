<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacebookController extends Controller
{
    public function messenger_verify(Request $request){
        $appsecret = 'EAADomyz9SzoBAFzyt5SNe2EWGZCYwiZASDkOyyXO8ZBZCOYRBZCFPCITvzvrgw8XUwrePrWxvroIi2Ov5a84EG14hReckZCgUzxmT2x5FF5VWPZAq1X1VIzWgru82i7ZCZCLhrDhZCl0ZCqZCeBCteqACy1sxhjZAUjqoGOR44Vtq1WA8l43c92tLAgJqlYwQB2ZA3GnMZD';


        return response('ok',200);
    }


}
