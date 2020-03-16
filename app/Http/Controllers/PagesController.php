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
    public function showing()
    {
        $properties=property::where('active','1');
        $mutato='ÖSSZES INGATLAN';
        return view('pages.show', compact('properties', 'mutato'));
    }

    public function search(Request $request)
    {
        $mutato='KERESÉS/';
        $type_id = $request->type_id;
        switch($type_id){
            case 0:
                $mutato .= 'ELADÓ/';
            break;
            case 1:
                $mutato .= 'ELADÓ CSERELEHETŐSÉGGEL/';
            break;
            case 2:
                $mutato .= 'KIADÓ ELADÁSI OPCIÓVAL';
                break;
            case 3:
                $mutato .= 'KIADÓ/';
            break;
        }

        $list_type = $request->list_type;
        switch($list_type){
            case 0:
                $mutato .= 'VÁROS:MIND/';
            break;
            case 1:
                $mutato .= 'LAKÁS/';
            break;
            case 2:
                $mutato .= 'HÁZ/';
            break;
            case 3:
                $mutato .= 'NYARALÓ/';
            break;
            case 4:
                $mutato .= 'GARÁZS/';
            break;
            case 5:
                $mutato .= 'IRODA/';
            break;
            case 6:
                $mutato .= 'IPARI/';
            break;
            case 7:
                $mutato .= 'RAKTÁR/';
            break;
            case 8:
                $mutato .= 'ÜZLETHELYISÉG/';
            break;
            case 9:
                $mutato .= 'TELEK-FÖLD/';
            break;
            case 10:
                $mutato .= 'VENDÉGLÁTÁS/';
            break;
            case 11:
                $mutato .= 'EGYÉB/';
            break;
                            }
        $city = $request->city;
        if ($city){
            $mutato .= strtoupper($city) . '/';
        }
        $room_no = $request->room_no;
        if ($room_no){
            $mutato .= 'SZOBÁK SZÁMA-' . $room_no . '+/';
        }
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

        ->when($room_no, function($query, $room_no){ 
            return $query->where('room_no','>',$room_no);
        })

        ->when($area, function($query, $area){ 
            return $query->where('area','>',$area);
        })

        ->when($land_area, function($query, $land_area){ 
            return $query->where('land_area','>',$land_area);
        })

        ->when($price_min, function($query, $price_min){ 
            return $query->where('price','>',$price_min);
        })

        ->when($price_max, function($query, $price_max){ 
            return $query->where('price','<',$price_max);
        });


        // $properties=$properties->paginate(9);
        
        return view('pages.show', compact('properties'));
    }



    public function showHazak()
    {
        $properties=property::hazak();
        $mutato="Házak";
        return view('pages.show', compact('properties', 'mutato'));
    }
    public function showLakasok()
    {
        $properties=property::lakasok();
        $mutato="Lakások";
        return view('pages.show', compact('properties', 'mutato'));
    }
    public function showIrodak()
    {
        $properties=property::irodak();
        $mutato="Irodák";
        return view('pages.show', compact('properties', 'mutato'));
    }
    public function showIpari()
    {
        $properties=property::ipari();
        $mutato="Ipari ingatlanok";
        return view('pages.show', compact('properties', 'mutato'));
    }
    public function showNyaralok()
    {
        $properties=property::nyaralok();
        $mutato="Nyaralók";
        return view('pages.show', compact('properties', 'mutato'));
    }
    public function showGarazsok()
    {
        $properties=property::Garazsok();
        $mutato="Garázsok";
        return view('pages.show', compact('properties', 'mutato'));
    }
    public function showRaktarak()
    {
        $properties=property::Raktarak();
        $mutato="Raktárak";
        return view('pages.show', compact('properties', 'mutato'));
    }

    public function showUzlethelyisegek()
    {
        $properties=property::Uzlethelyisegek();
        $mutato="Üzlethelyiségek";
        return view('pages.show', compact('properties', 'mutato'));
    }

    public function showTelekfold()
    {
        $properties=property::Telekfold();
        $mutato="Telek-Föld";
        return view('pages.show', compact('properties', 'mutato'));
    }
    public function showVendeglatas()
    {
        $properties=property::Vendeglatas();
        $mutato="Vendéglátás";
        return view('pages.show', compact('properties', 'mutato'));
    }
    public function showEgyeb()
    {
        $properties=property::Egyeb();
        $mutato="Egyéb";
        return view('pages.show', compact('properties', 'mutato'));
    }


}
