<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
       

        $page = Page::where('slug','home')->first();
        

        $categories = Category::where('status',1)->get();
        
        $slider = $page->sliders[0];
        if($slider){
            $total = count($slider->items);
        }else{
            $total = 0;
        }

        $videos = Video::where('status',2)->where('destacado',2)->orderBy('id','desc')->get();

        return view('front.index',['categories'=> $categories,'slider'=>$slider,'total'=>$total,'videos'=>$videos,'page'=>$page]);
    }

    
    public function reporte(Request $request){
       
        $label = new Label();
        $label->label = $request->label;
        $label->ip =  $request->ip();
       // $label->user_id =  $id;
        $label->save();

        return response()->json(['rpta'=>'ok']);
    }
}
