<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function flipper(){
        return $this->hasOne('App\Flipper');
    }
}
