<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'agent_id',
        'name',
        'address',
        'tel',
        'email',
        'status',
       ];
    
    protected $dates = ['deleted_at'];
    
       public function agent(){
        return $this->belongsTo('App\agent');
     }
  
    
}
