<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
class VideoController extends Controller
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
        $video = new Video();
        $video->name = $request->name;
        $video->embed = $request->embed;
        if(isset($request->status)){
            $video->status = $request->status;
            }else{
                $video->status = 2;
            }
            if(isset($request->destacado)){
                $video->destacado = $request->destacado;
            }else{
                $video->destacado = 1;
            }
        $video->save();

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
        $video =  Video::find($id);

        return response()->json($video);
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
        $video = Video::find($id);
        $video->name = $request->name;
        $video->embed = $request->embed;

        if(isset($request->status)){
        $video->status = $request->status;
        }else{
            $video->status = 2;
        }
        if(isset($request->destacado)){
            $video->destacado = $request->destacado;
        }else{
            $video->destacado = 1;
        }

        $video->save();

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
        Video::find($request->id)->delete();

        return response()->json(['rpta'=>'ok']);
    }

    public function estado(Request $request){
        $estado = Video::where('id',$request->id)->first();

        $estado->status = $request->estado;

        $estado->save();

        return response()->json(['rpta'=>'ok']);
    }

    public function destacar(Request $request){
        $estado = Video::where('id',$request->id)->first();

        $estado->destacado = $request->destacado;

        $estado->save();

        return response()->json(['rpta'=>'ok']);
    }
}
