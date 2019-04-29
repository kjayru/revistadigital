<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFile extends Model
{
   protected $fillable = ['name','lastname','puntoventa', 'numdocumento', 'perfil',
   'movil','email','region','departamento','provincia','distrito', 'canal'];
}
