<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = "item";

    public static function get_top_seller($k=5){
        return Item::orderBy('sold','desc')->take($k)->get();
    }

    public function groups(){
        return $this->belongsTo('App\\Groups','group_id','id');
    }
}
