<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\File;
use App\Category;
use App\Mail\TestEmail;
use App\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::where('status',1)->get();
        $slider = Slider::find(9);

        return view('front.index',['categories'=> $categories,'slider'=>$slider]);
    }

}
