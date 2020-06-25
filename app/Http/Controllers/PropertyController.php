<?php

namespace App\Http\Controllers;
use App\property;
use App\client;
use App\agent;
use App\photo;

use Illuminate\Support\Facades\Storage;
use File;

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
       property::create($input);
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
        property::where('id', $property->id)
        ->update($input);
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
