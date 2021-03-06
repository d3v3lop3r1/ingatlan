<?php

namespace App\Http\Controllers;

use App\property;
use App\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    public function getAddresses() {
        $addresses = property::Aktiv()->select('map_lat','map_long')->get();
        return $addresses;

    }

    public function index(Property $property)
    {
        if (!$property->active && !Auth::check()){
            abort(404, 'A hirdetés nem aktív.');
        }
        $addresses = property::Aktiv()->select('id','price','map_lat','map_long','header_hun','short_text_hun')->get();
        return view('pages.index', compact('property','addresses'));
    }
    public function home()
    {
        $properties_kiemeltek=property::Aktiv()->Kiemelt()->orderBy('updated_at','desc')->limit(6)->get();
        $properties_areses=property::Aktiv()->where('act_price','>','0')->orderBy('updated_at','desc')->limit(6)->get();
        $prop_elado_lakasok_cheap=property::select(['id','header_hun','act_price','price','region','city','updated_at'])->Aktiv()->Elado()->Lakasok()->Cheap()->limit(5)->get();
        $prop_elado_hazak_cheap=property::select(['id','header_hun','act_price','price','region','city','updated_at'])->Aktiv()->Elado()->Hazak()->Cheap()->limit(5)->get();
        return view('pages.home',compact('properties_kiemeltek','properties_areses','prop_elado_lakasok_cheap','prop_elado_hazak_cheap'));
    }
    public function showing(Request $request)
    {
        $list_type=$request->list_type;
        $properties=property::where('active','1')
        ->where('type_id',$request->type_id)
        ->when($list_type, function($query, $list_type){
            return $query->where('list_type', $list_type);
        })
        ;
        $mutato=$request->mutato;
        return view('pages.show', compact('properties', 'mutato'));
    }

    public function filter(Request $request){

        $new_url=$request->old_url . '&filter=' . $request->filter;
        return redirect($new_url);
    }


    public function demo(){
        $properties = property::all();
        return view('demo', compact('properties'));
    }


    public function view($view){
        if($view==2){
            session(['view'=>'box']);
        } else{
            session(['view'=>'rectangle']);
        }

        return redirect()->back();
    }

    public function search(Request $request)
    {
        session(['type_id'=>$request->type_id]);
        session(['list_type'=>$request->list_type]);
        session(['city'=>$request->city]);
        session(['room_no'=>$request->room_no]);
        session(['filter'=>$request->filter]);
        if (!$request->session()->has('view')) {
            session(['view'=>'rectangle']);
        }
        $filter=$request->filter;
        if(!$filter){
            $filter=1;
        }
        $mutato='';

        $type_ids=config('property.type_id.hu');
        $type_id = $request->type_id;

        if ($type_id) {
            $mutato .= $type_ids[$type_id] . '-';
        }

        $list_types=config('property.list_type.hu');
        $list_type = $request->list_type;
        if ($list_type) {
            $mutato .= $list_types[$list_type] . '-';
        }

        $city = $request->city;
        if ($city){
            $mutato .= $city . '-';
        }

        $room_no = $request->room_no;
        if ($room_no){
            $mutato .= 'szobák száma min.:' . $room_no . '-';
        }

        $area = $request->area;
        $land_area = $request->land_area;
        $price_min = $request->price_min;
        $price_max = $request->price_max;

        $properties = property::where('active','1')
        ->when($type_id, function($query, $type_id){
            return $query->where('type_id', $type_id);
        })
        ->when($list_type, function($query, $list_type){
            return $query->where('list_type', $list_type);
        })

        ->when($city, function($query, $city){
            return $query->where('city', $city);
        })

        ->when($room_no, function($query, $room_no){
            return $query->where('room_no','>',$room_no);
        })

        ->when($area, function($query, $area){
            return $query->where('area','>',$area);
        })

        ->when($land_area, function($query, $land_area){
            return $query->where('land_area','>',$land_area);
        })


        ->when($price_max, function($query, $price_max){
            return $query->where('price','<',$price_max);
        })

        ->when($filter, function($query, $filter){
            switch ($filter) {
                case "1":
                    return $query->orderBy('updated_at','desc');
                    break;
                case "2":
                    return $query->orderBy('updated_at','asc');
                    break;
                case "3":
                    return $query->orderBy('price','desc');
                    break;
                case "4":
                    return $query->orderBy('price','asc');
                    break;
                case "5":
                    return $query->orderBy('area','desc');
                    break;
                case "6":
                    return $query->orderBy('area','asc');
                    break;
                default:
                return $query->orderBy('updated_at','desc');
            }

        });


        // $properties=$properties->paginate(9);
        if(session('view')=='rectangle'){
            return view('pages.show_new', compact('properties', 'mutato', 'request'));
        } else {
            return view('pages.show', compact('properties', 'mutato', 'request'));

        }

    }

}
