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
        if(!empty($request->nuevaVentana)){
            $item->external_url = $request->nuevaVentana;
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
        $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'Complete este campo',
        ]);
        
        $item =  Item::find($id);
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

    public function actualizar(Request $request)
    {
        $item = Item::find($id);
        if(isset($request->file('imagen')[$k])){
            $img = $request->file('imagen')[$k]->store('sliders');
            $image->background = $img;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
       
        Item::find($id)->delete();

        return redirect()->route('sliders.show',['slider_id'=>$request->slider_id])
        ->with(['info'=>'Elemento eliminado con exito']);
    }

    //revista.test/admin/items/10

    public function elementosUpdate(Request $request, $id){
       
        $item = Item::find($id);
        if($request->has('imagen'))
        {
            $img = $request->file('imagen')->store('sliders');
           
          
            switch ($request->row) {

                case 'background':
                    $item->background = $img;
                break;
                case 'max1366':
                    $item->max1366 = $img;
                break;
                case 'max1024':
                    $item->max1024 = $img;
                break;
                case 'max768':
                    $item->max768 = $img;
                break;
                case 'max640':
                    $item->max640 = $img;
                break;
                case 'max480':
                    $item->max480 = $img;
                break;
                
            
            }
        }
       $item->save();
       
        
       return redirect()->route('items.edit',['id'=>$item->id,'slider_id'=>$request->slider_id])
         ->with(['info'=>'Imagen cargada satisfactoriamente']);
         
    }
}
