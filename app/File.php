<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Imagick;
class File extends Model
{
    public function flipper(){
        return $this->hasOne('App\Flipper');
    }

    public static function createToPdf($filepdf,$id){
        $img = new imagick($_SERVER['DOCUMENT_ROOT']."/storage/".$filepdf);
        $img->setImageBackgroundColor('white');
        //$img = $img->flattenImages();
        $img->setResolution(300,300);
        $num_pages = $img->getNumberImages();
 
        $img->setImageCompressionQuality(100);
        $images = NULL;
       
            $images=uniqid().'-'.$id.'.jpg';  
            $img->setIteratorIndex(0);
            $img->setImageFormat('jpeg');
            $paththumb = '/files/thumbs/'.uniqid().'-'.$id.'.jpg';
            $img->writeImage($_SERVER['DOCUMENT_ROOT'].'/storage/'.$paththumb);

        $img->destroy();
        return $paththumb;
    }
}
