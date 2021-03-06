<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Session\Store;
use App\User;
use App\Client;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function apilogin(Request $request){

        if($request->token){

            $user = User::where('api_token',$request->token)->first();

            if(!$user){

                return redirect('/login');
            }else{
                auth()->LoginUsingId($user->id);
                return redirect()->route('home', ["info" => "Sesion iniciada" ]);
            }
        }else{
            return redirect('/login');
        }

    }
}
