<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agent extends Model
{
   protected $fillable = [
    'level',
    'name',
    'languages',
    'address',
    'tel',
    'tel2',
    'email',
    'provision',
    'photo',
    'about_me_hun',
    'about_me_de'
   ];


   public function client(){
      return $this->hasMany('App\client');
   }
   public function property(){
      return $this->hasMany('App\properties');
   }
}
