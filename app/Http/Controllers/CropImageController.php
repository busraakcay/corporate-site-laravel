<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CropImageController extends Controller
{
    public function cropImage(Request $request)
    {
        $image = $request->image;
        $image_array_1 = explode(";", $image);
        $image_array_2 = explode(",", $image_array_1[1]);
        $image = base64_decode($image_array_2[1]);
        $image_name =  makeRandomValueForImage() . '.png';
        $image_path = 'uploads/temp/' . $image_name;
        file_put_contents($image_path, $image);
        return $image_name;
    }
}
