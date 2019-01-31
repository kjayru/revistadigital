<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Category;

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
        $categories = Category::all();
        return view('front.index',['categories'=> $categories]);
    }


}
