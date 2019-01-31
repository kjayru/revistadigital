<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flipper extends Model
{
    public function file(){
        return $this->belongsTo('App\File');
    }

    public function gallery(){
        return $this->belongsTo('App\Gallery');
    }

    public function video(){
        return $this->belongsTo('App\Video');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
