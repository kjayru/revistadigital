<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Imagick;
class File extends Model
{
    public function flipper(){
        return $this->hasOne('App\Flipper');
    }

    public static function createToPdf($filepdf){


        $img = new imagick($_SERVER['DOCUMENT_ROOT']."/storage/".$filepdf);

        // Set background color and flatten
        // Prevents black background on objects with transparency
        $img->setImageBackgroundColor('white');
        //$img = $img->flattenImages();

        // Set image resolution
        // Determine num of pages
        $img->setResolution(300,300);
        $num_pages = $img->getNumberImages();

        // Compress Image Quality
        $img->setImageCompressionQuality(100);
        $images = NULL;
        // Convert PDF pages to images

            $images=uniqid().'-1.jpg';
            // Set iterator postion
            $img->setIteratorIndex($i);

            // Set image format
            $img->setImageFormat('jpeg');

            // Write Images to temp 'upload' folder
            $img->writeImage('/storage/files/thumbs/'.uniqid().'-1.jpg');

        echo "<pre>";
        print_r($images);
        $img->destroy();

    }
}
