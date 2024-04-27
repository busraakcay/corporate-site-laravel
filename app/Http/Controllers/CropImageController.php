<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
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

    public function cropImageDestroy(Request $request)
    {
        if ($request->location == 'products') {
            try {
                $productImage = ProductImage::withoutGlobalScopes()->where('image', $request->fileName)->first();
                if (isset($productImage)) {
                    $productImages = ProductImage::withoutGlobalScopes()->where('product_id', $productImage->product_id)->get();
                    if (count($productImages) > 1) {
                        $productImage->delete();
                        deleteImage('uploads/products/', $request->fileName);
                    }
                }
                deleteImage('uploads/temp/', $request->fileName);
            } catch (\Exception $e) {
            }
        } else {
            deleteImage('uploads/temp/', $request->fileName);
        }
    }


    public function getProductImagesToDropzone(Request $request)
    {
        $productImages = ProductImage::withoutGlobalScopes()->where('product_id', $request->id)->get();
        return $productImages;
    }

    public function getProductImageId(Request $request)
    {
        $productImage = ProductImage::where('name', $request->name)->first();
        return $productImage->id;
    }
}
