<?php

namespace App\Http\Controllers;
use App\property;
use App\photo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Property $property)
    {
        return view('pages.index', compact('property'));
    }
    public function home()
    {
        return view('pages.home');
    }
    public function show()
    {
        $properties=property::where('active','1')->paginate(12);
        // return $properties;
        return view('pages.show', compact('properties'));
    }


    public function search(Request  $request)
    {
        $properties = property::where([
            ['active','1'],
            ['type_id',$request->type_id],
            ['list_type',$request->list_type],
            ['city',$request->city],
            ['room_no','>',$request->room_no],

        ])->paginate(6);
        return view('pages.show', compact('properties'));
    }



    public function showHazak()
    {
        $properties=property::hazak()->paginate(12);
        // return $properties;
        return view('pages.show', compact('properties'));
    }
    public function showLakasok()
    {
        $properties=property::lakasok()->paginate(12);
        // return $properties;
        return view('pages.show', compact('properties'));
    }
    public function showIrodak()
    {
        $properties=property::irodak()->paginate(12);
        // return $properties;
        return view('pages.show', compact('properties'));
    }
    public function showIpari()
    {
        $properties=property::ipari()->paginate(12);
        // return $properties;
        return view('pages.show', compact('properties'));
    }
    public function showNyaralok()
    {
        $properties=property::nyaralok()->paginate(12);
        // return $properties;
        return view('pages.show', compact('properties'));
    }
    public function showGarazsok()
    {
        $properties=property::Garazsok()->paginate(12);
        // return $properties;
        return view('pages.show', compact('properties'));
    }
    public function showRaktarak()
    {
        $properties=property::Raktarak()->paginate(12);
        // return $properties;
        return view('pages.show', compact('properties'));
    }


}
