<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\File;
use App\Category;
use App\Flipper;
use App\Page;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        return view('admin.dashboard.index');
    }

    
    public function show($slug)
    {
        $page = Page::where('slug',$slug)->first();

       
       $cat = Category::where('slug',$slug)->first();
        $categories = Category::where('status',1)->get();
        if($cat){
        $estado = 1;
           $slug = Flipper::where('category_id',$cat->id)->orderBy('created_at','desc')->first();
        }else{
          $estado = 0;
        }
        
       

        return view('front.categoria',['slug'=>$slug,'categories'=> $categories,'estado'=>$estado,'cat'=>$cat,'page'=>$page]);
    }

    
}
