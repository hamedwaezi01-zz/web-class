<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $table = 'review';

    public function user(){
        return $this->belongsTo('App\\User','uid','id');
    }
    public function item(){
        return $this->belongsTo('App\\Item','item_id','id');
    }

}
