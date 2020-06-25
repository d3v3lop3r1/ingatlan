<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\property;
use Illuminate\Support\Facades\Http;

class MaintenanceController extends Controller
{
    public function mapLatLong(){
        $raw_addresses = property::select('id', 'country', 'region', 'city', 'street', 'street_number')->get();
        foreach ($raw_addresses as $address){
            $formatted_address = $address->street_number . ' ' . $address->street . ',' . $address->city . ',' . 'Hungary';
            $encoded_address = urlencode($formatted_address);
            $httpaddress = 'https://maps.googleapis.com/maps/api/geocode/json?key=' . env('GOOGLE_API_KEY') . '&address=' . $encoded_address;
            $response = Http::get($httpaddress);

            $rawresult = json_encode($response->json());

            $result=json_decode($rawresult);
            dd($result);
            $latlong = $result->results[0]->geometry->location;
            echo ($address->id . ' hirdetés lat:' . $latlong->lat . ' long:' . $latlong->lng);
            $prop = property::where('id', $address->id);
            $prop->update(['map_lat'=>$latlong->lat, 'map_long'=>$latlong->lng]);
        }
    }
}
