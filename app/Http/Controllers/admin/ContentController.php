<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\PdfToImage\Pdf;
use App\Slider;
use App\Video;
use App\Image;
use App\Gallery;
use App\File;
use App\Category;
use App\Flipper;

class ContentController extends Controller
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
        $sliders = Slider::all();
        $videos  = Video::all();
        $imagenes = Gallery::all();
        $categories = Category::all();
        return view('admin.contenido.index',['sliders'=>$sliders,'videos'=>$videos,'imagenes'=>$imagenes,'categories'=>$categories]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $files = File::find($id);

        return Response(['files'=>$files]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $files = File::find($id);

        return Response(['files'=>$files]);
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

    public function getvideo(){
        $videos = Video::all();

        return Response()->json($videos);
    }

    public function getgallery(){
        $imagenes = Gallery::all();

        return Response()->json($imagenes);
    }


    public function postgallery(Request $request){

        $cadena = uniqid();

        $galeria = new Gallery();

        $galeria->name = $request->nombre;
        $galeria->prefijo = $cadena;
        $galeria->save();

        if($request->file('fotos')){

            foreach ($request->file('fotos') as $k => $photo) {
                $file = $photo;
                $cont = $k+1;
                $input['imagename'] = $cadena."-".$cont.'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('/storage/gallery');
                $file->move($destinationPath, $input['imagename']);

                $image = new Image();
                $image->gallery_id = $galeria->id;
                $image->path = $input['imagename'];
                $image->order = $cont;
                $image->save();


            }

        }

        return  Response()->json(['rpta'=>'ok']);
    }

    public function postpdf(Request $request){

        $flip = new Flipper();


        if ($request->hasFile('pdffile')) {
            $anuncio = $request->file('pdffile')->store('files');

            $ifile = new File();
            $ifile->path = $anuncio;
            $ifile->save();
            $flip->file_id  =  $ifile->id;
        }

        if($request->imagenes){
            $flip->gallery_id = $request->imagenes;
        }

        if($request->video){
            $flip->video_id = $request->video;
        }

        $flip->category_id = $request->categoria;
        $flip->month = $request->catmes;
        $flip->year = $request->catyear;
        $flip->save();

        $pdf = new Pdf($anuncio);
        dd($pdf);
        $pdf->saveImage('/storage/files/thumbs');
        $cate = Category::where('id',$request->categoria)->first();

        return  Response()->json($cate->slug);
    }
}
