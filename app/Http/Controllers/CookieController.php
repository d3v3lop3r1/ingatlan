<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;
use App\property;



class CookieController extends Controller
{

    public function cookieSet($id){

        if(cookie('cookieconsent_status')){
            $cookie=Cookie::get('ingatlanfox_saved_properties');
            if(!$cookie){
                $property_added = json_encode([$id=>time()]);
            } else {
                $saved_properties = json_decode($cookie, true);
                if (Arr::exists($saved_properties, $id)){
                    $modded_properties = json_encode(Arr::except($saved_properties, [$id]));
                    return response("ok", 200)->withCookie('ingatlanfox_saved_properties', $modded_properties, 43200);
                } else {
                    $property_added = json_encode(Arr::add($saved_properties, $id, time()));
                }
            }

            return response("ok", 200)->withCookie('ingatlanfox_saved_properties', $property_added, 43200);
        } else {
                return response("error", 500)
                ->with('cookie_status','A cookiek használatát el kell fogadni először!');
            }
        }

        public function getCookie(){
            $cookie=Cookie::get('ingatlanfox_saved_properties');
            $saved_properties = json_decode($cookie, true);
            return $cookie;
        }


        public function getCookieProperties(){
            if (!$cookie=Cookie::get('ingatlanfox_saved_properties')){
                return response('Nincs még mentett ingatlan',404);
            }
            $saved_properties = json_decode($cookie, true);
            $prop_keys=array_keys($saved_properties);
            $properties=property::select('id','header_hun','short_text_hun')->findMany($prop_keys);
            return $properties;
        }



        public function cookieCheck($id){
            if($cookie=Cookie::get('ingatlanfox_saved_properties')){
                $saved_properties = json_decode($cookie, true);
            } else {
                $saved_properties = [];
            }
            if(Arr::exists($saved_properties, $id)){
                return 1;
            } else {
                return 0;
            }
        }
    }
