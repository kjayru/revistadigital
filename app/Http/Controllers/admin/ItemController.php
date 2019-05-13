<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Item;
use App\Category;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
        $categories = Category::all();
        return view('admin.items.create',['categories'=>$categories,'slider_id'=>$request->slider_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'Complete este campo',
        ]);
        
        $item = new Item();
        $item->title = $request->title;
        $item->subtitle = $request->subtitle;
        $item->description = $request->description;
        $item->url = $request->url;
        if(!empty($request->estado)){
            $item->state = $request->estado;
        }
        $item->slider_id = $request->slider_id;
        $item->save();

        return redirect()->route('items.edit',['id'=>$item->id,'slider_id'=>$request->slider_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
         $item = Item::find($id);
         $categories = Category::all();
         return view('admin.items.edit',['item'=>$item,'categories'=>$categories,'slider_id'=>$request->slider_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
