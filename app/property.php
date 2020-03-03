<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    protected $fillable = [
        'client_id',
        'agent_id',
        'list_type',
        'ad_type',
        'subtype',
        'type_id',
        'header',
        'text',
        'country',
        'region',
        'city',
        'street',
        'street_number',
        'price',
        'min_price',
        'deposit',
        'room_no',
        'halfroom_no',
        'area',
        'condition',
        'heating',
        'look',
        'orientation',
        'parking',
        'comfort',
        'attic',
        'floors',
        'cellar',
        'land_area',
        'accessibility',
        'utility',
        'house_levels',
        'water',
        'gas',
        'elecricity',
        
       ];
    public function photos(){
        return $this->hasMany('App\photo');
    }
    public function agents(){
        return $this->belongsTo('App\agent','agent_id');
    }

    public function scopeLakasok($query)
    {
        return $query->where('active', 1)->where('list_type', 1);
    }
    
    public function scopeHazak($query)
    {
        return $query->where('active', 1)->where('list_type', 2);
    }
    public function scopeIrodak($query)
    {
        return $query->where('active', 1)->where('list_type', 3);
    }
    public function scopeIpari($query)
    {
        return $query->where('active', 1)->where('list_type', 4);
    }
    public function scopeNyaralok($query)
    {
        return $query->where('active', 1)->where('list_type', 5);
    }
    public function scopeGarazsok($query)
    {
        return $query->where('active', 1)->where('list_type', 6);
    }
    public function scopeRaktarak($query)
    {
        return $query->where('active', 1)->where('list_type', 7);
    }
    
    

    }
