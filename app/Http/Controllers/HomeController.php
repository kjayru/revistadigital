<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\File;
use App\Category;
use App\Mail\TestEmail;


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

    public function testmail(){
        $data = ['message' => "This is a test!"];

        Mail::to('wiltinoco@gmail.com')->send(new TestEmail($data));
    }


}
