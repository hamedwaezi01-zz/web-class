<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    public $table = 'slides';
    public function item(){
        return $this->belongsTo('App\\Item','item_id','id');
    }
}
