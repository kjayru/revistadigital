<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function flipper(){
        return $this->hasOne('App\Flipper');
    }
}
