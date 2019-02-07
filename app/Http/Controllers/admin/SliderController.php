<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Item;
class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
                if(isset($image->external_url)){
                    $image->external_url = $request->nuevaVentana[$k];
                }
                if(isset($image->state)){
                    $image->state = $request->estado[$k];
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
        $slider = Slider::where('id',$id)->with('items')->get();

        return response()->json($slider);
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
        $slider = Slider::find($id);
        $slider->title = $request->nombre;
        $slider->save();

        $elementos = count($request->texto);

            for ($k=0; $k < $elementos; $k++) {
                if(isset($request->item_id[$k])){
                  $exist = Item::where('id',$request->item_id[$k])->count();
                }else{
                  $exist = 0;
                }
                if($exist>0){
                    $image = Item::where('id',$request->item_id[$k])->first();
                }else{
                    $image = new Item();
                }

                if(isset($request->file('imagen')[$k])){
                    $img = $request->file('imagen')[$k]->store('sliders');
                    $image->background = $img;
                }
                $image->title = $request->texto[$k];

                if(isset($request->nuevaVentana[$k])){
                    $image->external_url = 2;
                }else{
                    $image->external_url = 1;
                }
                if(isset($request->estado[$k])){
                    $image->state = 2;
                }else{
                    $image->state = 1;
                }
                $image->url = $request->url[$k];
                $image->slider_id = $slider->id;
                $image->save();

            }

            return response()->json(['rpta'=>'ok']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Item::where('slider_id',$request->id)->delete();

        Slider::find($request->id)->delete();

        return response()->json(['rpta'=>'ok']);
    }


    public function deleteItem(Request $request){

        Item::where('id',$request->item_id)->delete();

        return response()->json(['rpta'=>'ok']);
    }

    public function estado(Request $request){
        $slide = Slider::where('id',$request->id)->first();

        $slide->status = $request->estado;

        $slide->save();

        return response()->json(['rpta'=>'ok']);

    }
}
