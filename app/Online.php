<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Online extends Model
{
    protected $table = "sessions";
    protected $timestamps = false;
    protected $fillable = ['user_id'];
}
