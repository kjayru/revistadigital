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
        $slider = Slider::where('id',1)->where('status',1)->first();
        if($slider){
            $total = count($slider->items);
        }else{
            $total = 0;
        }

        return view('front.index',['categories'=> $categories,'slider'=>$slider,'total'=>$total]);
    }

}
