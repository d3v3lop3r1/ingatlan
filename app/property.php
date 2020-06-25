<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    protected $fillable = [
        'client_id',
        'agent_id',
        'aktiv',
        'kiemelt',
        'type_id',
        'list_type',
        'subtype',
        'price',
        'min_price',
        'act_price',
        'deposit',
        'country',
        'region',
        'city',
        'street',
        'street_number',
        'attraktivias',
        'allapot',
        'extrak',
        'area',
        'land_area',
        'floors',
        'room_no',
        'halfroom_no',
        'bathroom_no',
        'toilet_no',
        'condition',
        'heating',
        'ad_type',
        'parking',
        'comfort',
        'room_height',
        'lift',
        'balcony',
        'terrace',
        'aircondition',
        'disabled',
        'garden',
        'header_hun',
        'short_text_hun',
        'text_hun',
        'header_de',
        'short_text_de',
        'text_de',
        'header_en',
        'short_text_en',
        'text_en',
        'map_lat',
        'map_long'
        
       ];
    public function photos(){
        return $this->hasMany('App\photo');
    }
    public function agents(){
        return $this->belongsTo('App\agent','agent_id');
    }
    public function scopeAktiv($query)
    {
        return $query->where('active', 1);
    }
    public function scopeKiemelt($query)
    {
        return $query->where('kiemelt', 1);
    }
    public function scopeCheap($query)
    {
        return $query->orderBy('price');
    }
    
    public function scopeElado($query)
    {
        return $query->where('type_id', 1);
    }
    public function scopeKiado($query)
    {
        return $query->where('type_id', 2);
    }
    public function scopeLakasok($query)
    {
        return $query->Aktiv()->where('list_type', 1);
    }
    
    public function scopeHazak($query)
    {
        return $query->Aktiv()->where('list_type', 2);
    }
    public function scopeIrodak($query)
    {
        return $query->Aktiv()->where('list_type', 3);
    }
    public function scopeIpari($query)
    {
        return $query->Aktiv()->where('list_type', 4);
    }
    public function scopeNyaralok($query)
    {
        return $query->Aktiv()->where('list_type', 5);
    }
    public function scopeGarazsok($query)
    {
        return $query->Aktiv()->where('list_type', 6);
    }
    public function scopeRaktarak($query)
    {
        return $query->Aktiv()->where('list_type', 7);
    }
    public function scopeUzlethelyisegek($query)
    {
        return $query->Aktiv()->where('list_type', 8);
    }
    public function scopeTelekfold($query)
    {
        return $query->Aktiv()->where('list_type', 9);
    }
    public function scopeVendeglatas($query)
    {
        return $query->Aktiv()->where('list_type', 10);
    }
    public function scopeEgyeb($query)
    {
        return $query->Aktiv()->where('list_type', 11);
    }
    
    

    }
