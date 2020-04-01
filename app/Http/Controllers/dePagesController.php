<?php

namespace App\Http\Controllers;
use App\property;
use App\photo;
use Illuminate\Http\Request;

class dePagesController extends Controller
{
    public function index(Property $property)
    {
        return view('de_pages.index', compact('property'));
    }
    public function home()
    {
        $properties=property::Aktiv()->Kiemelt()->inRandomOrder()->limit(3)->get();
        $prop_elado_lakasok_cheap=property::select(['id','header_de','price','city','updated_at'])->Aktiv()->Elado()->Lakasok()->Cheap()->limit(5)->get();
        $prop_elado_hazak_cheap  =property::select(['id','header_de','price','city','updated_at'])->Aktiv()->Elado()->Hazak()  ->Cheap()->limit(5)->get();
        return view('de_pages.home',compact('properties','prop_elado_lakasok_cheap','prop_elado_hazak_cheap'));
    }
    public function showing()
    {
        $properties=property::where('active','1');
        $mutato='Alle Immobilien';
        return view('de_pages.show', compact('properties', 'mutato'));
    }

    public function search(Request $request)
    {
        $mutato='';

        $type_ids=config('property.type_id.de');
        $type_id = $request->type_id;
        $mutato .= $type_ids[$type_id] . '-';

        $list_types=config('property.list_type.de');
        $list_type = $request->list_type;
        $mutato .= $list_types[$list_type] ;

        $city = $request->city;
        if ($city){
            $mutato .= strtoupper($city) . '/';
        }

        $room_no = $request->room_no;
        if ($room_no){
            $mutato .= 'ANZAHL DER ZIMMER-' . $room_no . '+/';
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


        ->when($price_max, function($query, $price_max){ 
            return $query->where('price','<',$price_max);
        });


        // $properties=$properties->paginate(9);
        return view('de_pages.show', compact('properties', 'mutato'));
    }

    public function eladoOsszes()
    {
        $properties=property::elado();
        $mutato="Immobilien zu verkaufen";
        return view('de_pages.show', compact('properties', 'mutato'));
    }

    public function eladoHazak()
    {
        $properties=property::hazak()->elado();
        $mutato="Häuser zum Verkauf";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function eladoLakasok()
    {
        $properties=property::lakasok()->elado();
        $mutato="Eladó lakások";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function eladoIrodak()
    {
        $properties=property::irodak()->elado();
        $mutato="Büros zum Verkauf";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function eladoIpari()
    {
        $properties=property::ipari()->elado();
        $mutato="Gewerbeimmobilien zu verkaufen";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function eladoNyaralok()
    {
        $properties=property::nyaralok()->elado();
        $mutato="Ferienhäuser zu verkaufen";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function eladoGarazsok()
    {
        $properties=property::Garazsok()->elado();
        $mutato="Garagen zu verkaufen";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function eladoRaktarak()
    {
        $properties=property::Raktarak()->elado();
        $mutato="Lager zum Verkauf";
        return view('de_pages.show', compact('properties', 'mutato'));
    }

    public function eladoUzlethelyisegek()
    {
        $properties=property::Uzlethelyisegek()->elado();
        $mutato="Räumlichkeiten zum Verkauf";
        return view('de_pages.show', compact('properties', 'mutato'));
    }

    public function eladoTelekfold()
    {
        $properties=property::Telekfold()->elado();
        $mutato="Land zum Verkauf";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function eladoVendeglatas()
    {
        $properties=property::Vendeglatas()->elado();
        $mutato="Gastronomie, HOTEL zu verkauf";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function eladoEgyeb()
    {
        $properties=property::Egyeb()->elado();
        $mutato="Sonstiges zu verkaufen";
        return view('de_pages.show', compact('properties', 'mutato'));
    }



    public function kiadoOsszes()
    {
        $properties=property::kiado();
        $mutato="Kiadó ingatlanok";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function kiadoHazak()
    {
        $properties=property::hazak()->kiado();
        $mutato="Kiadó házak";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function kiadoLakasok()
    {
        $properties=property::lakasok()->kiado();
        $mutato="Kiadó lakások";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function kiadoIrodak()
    {
        $properties=property::irodak()->kiado();
        $mutato="Kiadó irodák";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function kiadoIpari()
    {
        $properties=property::ipari()->kiado();
        $mutato="Kiadó ipari ingatlanok";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function kiadoNyaralok()
    {
        $properties=property::nyaralok()->kiado();
        $mutato="Kiadó nyaralók";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function kiadoGarazsok()
    {
        $properties=property::Garazsok()->kiado();
        $mutato="Kiadó garázsok";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function kiadoRaktarak()
    {
        $properties=property::Raktarak()->kiado();
        $mutato="Kiadó raktárak";
        return view('de_pages.show', compact('properties', 'mutato'));
    }

    public function kiadoUzlethelyisegek()
    {
        $properties=property::Uzlethelyisegek()->kiado();
        $mutato="Kiadó üzlethelyiségek";
        return view('de_pages.show', compact('properties', 'mutato'));
    }

    public function kiadoTelekfold()
    {
        $properties=property::Telekfold()->kiado();
        $mutato="Kiadó telek-föld";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function kiadoVendeglatas()
    {
        $properties=property::Vendeglatas()->kiado();
        $mutato="Kiadó vendéglátás";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
    public function kiadoEgyeb()
    {
        $properties=property::Egyeb()->kiado();
        $mutato="Kiadó egyéb";
        return view('de_pages.show', compact('properties', 'mutato'));
    }
}
