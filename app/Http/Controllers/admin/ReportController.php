<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Label;
use App\Session as Sesion;
use \DB;
class ReportController extends Controller
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
      

        return view('admin.reporte.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id  = Auth::id();

        $label = new Label();
        $label->label = $request->label;
        $label->ip =  $request->ip();
        $label->user_id =  $id;
        $label->save();

        return response()->json(['rpta'=>$rpta]);
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
        //
    }

    public function reportUser(){
        
        $sesiones = Sesion::OrderBy('id','desc')->paginate(10);
       
        return view('admin.reporte.reportUser',['sesiones'=>$sesiones]);
    }
    public function reportCategory(){
        
        return view('admin.reporte.reportCategory');
    }
    public function reportLabel(){
        $label = \DB::table('labels')
                        ->select('label')
                        ->distinct()->get();
       
        return view('admin.reporte.reportLabel',['labels'=>$label]);
    }   
}
