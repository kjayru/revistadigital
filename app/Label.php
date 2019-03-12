<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Label;
class Label extends Model
{
    
    public static function contar($termino){
        $conteo = Label::where('label',$termino)->count();

        return $conteo;
    }
}
