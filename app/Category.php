<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    public function flipper(){
        return $this->hasOne('App\Flipper');
    }

    public static function fileExist($file){
        $exists = Storage::disk('local')->exists($file);
        return $exists;
    }
}
