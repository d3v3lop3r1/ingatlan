<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function saveFavourite(Request $request){
        dd($request);
        if(isset($_COOKIE['cookieconsent_status'])){
            return response("ok",200);    
        } else {
            return response("ok",200);
        }
        
    }
}
