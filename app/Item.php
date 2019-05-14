<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'title','hidetitle','background','backmovil','description','subtitle','url',
        'external_url','state','slider_id','max1366','max1024','max768','max640','max480'
    ];
    public function slider(){
        return $this->belongsTo('App\Slider');
    }
}
