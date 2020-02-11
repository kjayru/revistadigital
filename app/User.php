<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'puntoventa',
        'numdocumento',
        'perfil',
        'movil',
        'email',
        'region',
        'departamento',
        'provincia',
        'distrito',
        'canal',
         'password',
         'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public static function existuser($email){
        $user = \App\User::where('email',$email)->count();
        $usuarios = \App\User::all();
    }

    public function sessions(){
        return $this->hasMany(Session::class);
    }


    public static function ramdowpass($random_string_length){
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';

            $string = '';
            $max = strlen($characters) - 1;
            for ($i = 0; $i < $random_string_length; $i++) {
                $string .= $characters[mt_rand(0, $max)];
            }

            return $string;
    }

}
