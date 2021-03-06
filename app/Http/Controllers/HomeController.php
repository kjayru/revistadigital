<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\File;
use App\Category;
use App\Label;
use App\Slider;
use App\Video;
use App\Page;

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

        $slider= null;
        $total = null;
        $page = Page::where('slug','home')->first();


        $categories = Category::where('status',1)->get();
        if($page){
            $slider = $page->sliders[0];
            if($slider){
                $total = count($slider->items);
            }else{
                $total = 0;
            }
        }
        $videos = Video::where('status',2)->where('destacado',2)->orderBy('id','desc')->get();

        return view('front.index',['categories'=> $categories,'slider'=>$slider,'total'=>$total,'videos'=>$videos,'page'=>$page]);
    }


    public function reporte(Request $request){

        $label = new Label();
        $label->label = $request->label;
        $label->ip =  $request->ip();

       if (Auth::id()) {
          $label->user_id =  Auth::id();
         }
        $label->save();

        return response()->json(['rpta'=>'ok']);
    }
}
