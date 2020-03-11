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


    public function search(Request $request)
    {
        $type_id = $request->type_id;
        $list_type = $request->list_type;
        $city = $request->city;
        $room_no = $request->room_no;
        $area = $request->area;
        $land_area = $request->land_area;
        $price_min = $request->price_min;
        $price_max = $request->price_max;

        $properties = property::where('active','1')
        ->where('type_id',$type_id)
        
        ->when($list_type, function($query, $list_type){ 
            return $query->where('list_type', $list_type);
        })

        ->when($city, function($query, $city){ 
            return $query->where('city', $city);
        })

        ->where('room_no','>',$room_no)

        ->when($area, function($query, $area){ 
            return $query->where('area','>',$area);
        })

        ->when($land_area, function($query, $land_area){ 
            return $query->where('land_area','>',$land_area);
        })

        ->when($price_min, function($query, $price_min){ 
            return $query->where('price_min','>',$price_min);
        })

        ->when($price_max, function($query, $price_max){ 
            return $query->where('price_max','<',$price_max);
        })

        

        ->get();


        
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
