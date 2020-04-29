<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\photo;
use App\agent;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
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


    public function setDefault(Request $request)
    {
        $old_default_photo=Photo::where('id',$request->default_photo)->first();
        $old_default_photo_count=Photo::where('id',$request->default_photo)->count();
        if ($old_default_photo_count > 0){
            $old_default_photo->is_default=0;
            $old_default_photo->save();
        }
        $new_default_photo=Photo::where('id', $request->id)->first();
        $new_default_photo->is_default=1;
        $new_default_photo->save();
        return back();
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAgentPhoto($agent_id)
    {
        $agent=agent::where('id', $agent_id)->first();
        return view('photos.agents.create_photos', compact('agent', $agent));
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
            $input= $request->all();
            $file = $request->file('file');
            $rules = array(
		    'file' => 'image|max:3000',
            );
            $validation = Validator::make($input, $rules);

            if ($validation->fails())
            {
                return Response::make($validation->errors->first(), 400);
            }

            $extension = $file->extension();
            $filename = sha1(time().time()).".{$extension}";
            $directory='./uploads/';

            $img = Image::make($file)->fit(800, 600)->insert('./images/logos/ingatlanfox-watermark.png','center');
            $img->save($directory . $filename);


            $photo = new Photo;
            $photo->file1=$filename;
            $photo->property_id=$propId;
            $photo->is_default=$is_default;
            $save_to_database=$photo->save();
    }


    /**
     * Store a newly created photos in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateAgentPhoto(Request $request)
    {
        if ($request->file('file')->isValid()) {
            $file=$request->file('file');
            $url=$request->url;
            $filename= time() . $file->getClientOriginalName();
            $file->move('./uploads/agents', $filename);
            $agent_id=$request->agent_id;
            $agent= agent::where('id',$agent_id)->first();
            $old_photo=$agent->photo;
            $photo_path='./uploads/agents/' . $old_photo;
            File::delete($photo_path);
            $agent->photo=$filename;
            $agent->save();
            //return redirect('agents');
        }

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
        $photo_path='/uploads/' . $photo_to_delete->file1;
        File::delete($photo_path);
        photo::where('id', $id, 100)->first()->delete();
        return back();

    }


}
