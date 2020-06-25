<?php

namespace App\Http\Controllers;
use App\property;
use App\client;
use App\agent;
use App\photo;

use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Http;


//use Illuminate\Support\Arr;

use App\Http\Requests\storePropertyRequest;
use Illuminate\Http\Request;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties=property::orderBy('id','desc')->paginate(10);
        return view('properties.index', compact('properties'));
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
        $properties=property::all();
        return view('properties.lista', compact('properties'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePropertyRequest $request)
    {
       // property::create($request->all());
       // $prop_id=$request->id;
       //return view('admin.photos.create_photos')->with('prop_id');
       $input=$request->all();

       $formatted_address = $request->street_number . ' ' . $request->street . ',' . $request->city . ',' . 'Hungary';
       $encoded_address = urlencode($formatted_address);
       $httpaddress = 'https://maps.googleapis.com/maps/api/geocode/json?key=' . env('GOOGLE_API_KEY') . '&address=' . $encoded_address;
       $response = Http::get($httpaddress);

       $rawresult = json_encode($response->json());

       $result=json_decode($rawresult);

       $latlong = $result->results[0]->geometry->location;
       echo ($request->id . ' hirdetés lat:' . $latlong->lat . ' long:' . $latlong->lng);
       $prop_to_create = property::create(['map_lat'=>$latlong->lat, 'map_long'=>$latlong->lng]+$input);
       

       
       return redirect('properties');

    }


    

    /**
     * Display the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(property $property)
    {
        return dd($property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(storePropertyRequest $request, property $property)
    {
        $input=$request->except(['_token', '_method']);
        //$output = Arr::except($input, ['_token', '_method']);
        $formatted_address = $request->street_number . ' ' . $request->street . ',' . $request->city . ',' . 'Hungary';
        $encoded_address = urlencode($formatted_address);
        $httpaddress = 'https://maps.googleapis.com/maps/api/geocode/json?key=' . env('GOOGLE_API_KEY') . '&address=' . $encoded_address;
        $response = Http::get($httpaddress);

        $rawresult = json_encode($response->json());

        $result=json_decode($rawresult);

        $latlong = $result->results[0]->geometry->location;
        echo ($request->id . ' hirdetés lat:' . $latlong->lat . ' long:' . $latlong->lng);
        $prop_to_update = property::where('id', $property->id);
        $prop_to_update->update(['map_lat'=>$latlong->lat, 'map_long'=>$latlong->lng]+$input);

        return redirect('properties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        $photos_to_delete=photo::where('property_id', $property->id)->get();
        foreach($photos_to_delete as $photo){
            $photo_path='uploads/' . $photo->file1;
            File::delete($photo_path);
            photo::where('id', $photo->id, 100)->first()->delete();
        }
        property::destroy($property->id);
        return back();
    }
}
