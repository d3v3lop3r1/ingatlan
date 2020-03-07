<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use App\photo;

class photoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "index page";
    }

    public function is_default()
    {
        return "hello";
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $prop_id)
    {
     
        return view('photos.create_photos')->with('prop_id', $prop_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
            $propId=$request->input('prop_id');
            $default=photo::where('property_id',$propId)->where('is_default',1)->count();
            if (!$default){
                $is_default=1;
            } else {
                $is_default=0;
            }
            $file=$request->file('file');
            $filename= time() . $file->getClientOriginalName();
            $file->move('uploads', $filename); 

            $photo = new Photo;
            $photo->file1=$filename;
            $photo->property_id=$propId;
            $photo->is_default=$is_default;
            $photo->save();
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo_to_delete = photo::where('id', $id, 100)->first();
        $photo_path='uploads/' . $photo_to_delete->file1;
        File::delete($photo_path);
        photo::where('id', $id, 100)->first()->delete();
        return redirect('properties');
        
    }


}