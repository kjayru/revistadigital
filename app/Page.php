<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function sliders(){
        return $this->belongsToMany('App\Slider');
    }
}
