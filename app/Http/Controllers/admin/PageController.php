<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\Category;
use App\Slider;

class PageController extends Controller
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
        $page = Page::all();
        
        return view('admin.paginas.index',['pages'=>$pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        $sliders = Slider::all();
        $page = 0;
      
        return view('admin.paginas.create',['categories'=>$categories,'sliders'=>$sliders,'page'=>$page]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
       
        $page = new Page();
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->tags = $request->tags;
        $page->resume = $request->resume;
        $page->content = $request->content;
        $page->category_id = $request->category_id;
        $page->save();

        $page->sliders()->sync($request->get('slider_id'));

        return redirect()->route('pages.index')->with('info','Pagina creada con exito');
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
        $page = Page::find($id);
        $categories = Category::all();
        $sliders = Slider::all();

        
        return view('admin.paginas.edit',['page'=>$page,'categories'=>$categories,'sliders'=>$sliders]);
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
        $page =  Page::find($id);
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->tags = $request->tags;
        $page->resume = $request->resume;
        $page->content = $request->content;
        $page->save();

        
        $page->sliders()->sync($request->get('slider_id'));

        return redirect()->route('pages.index')->with('info','Pagina actualizada con exito');
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
