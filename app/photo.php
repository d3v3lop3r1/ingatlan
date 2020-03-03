<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $fillable = [
        'file1',
        'property_id'

    ];
/*     public function property(){
        return $this->belongsTo('App\property');
 */
}
