<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Item;
class SliderController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $slider = new Slider();

        $slider->title = $request->nombre;
        $slider->save();

        $elementos = count($request->file('imagen'));


            for ($k=0; $k < $elementos; $k++) {


                $img = $request->file('imagen')[$k]->store('sliders');

                $image = new Item();

                $image->background = $img;
                $image->title = $request->texto[$k];
                if($image->external_url){
                    $image->external_url = $request->nuevaVentana[$k];
                }
                if($image->status){
                    $image->status = $request->estado[$k];
                }
                $image->url = $request->url[$k];
                $image->slider_id = $slider->id;
                $image->save();



            }

            return response()->json(['rpta'=>'ok']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Item::where('slider_id',$id)->delete();

        Slider::find($id)->delete();

        return response()->json(['rpta'=>'ok']);
    }
}
