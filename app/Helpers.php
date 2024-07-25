<?php

use App\Models\Product;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

function getSettings()
{
    return Settings::first();
}

function checkPasswords($password, $repassword)
{
    return $password == $repassword;
}

function getLogoDimensions()
{
    return ["width" => "298", "height" => "88"];
}

function getGeneralPhotoDimensions()
{
    return ["width" => "1080", "height" => "1080"];
}

function getPaginationNumber()
{
    return 25;
}

function getLanguages()
{
    return array(["code" => "tr", "name" => "TR"], ["code" => "en", "name" => "EN"]);
}

function makeRandomValueForImage()
{
    $unique = uniqid() . time();
    $letter = chr(rand(97, 122));
    $rand1 = rand(10000, 99999);
    return  $unique . $letter . $rand1;
}

function adjustImage($filename, $seoName, $saveLocation, $oldImage, $imageWidth, $imageHeight)
{
    $tempLocation = 'uploads/temp/';
    if (!is_null($oldImage)) {
        deleteImage($saveLocation, $oldImage);
    }
    $imageResize = Image::make($tempLocation . $filename);
    $imageResize->resize($imageWidth, $imageHeight);
    $seoName = Str::of($seoName)->slug('-') . '-' . makeRandomValueForImage() . '.png';
    $imageResize->save(public_path($saveLocation . $seoName));
    if (!is_null($filename)) {
        deleteImage($tempLocation, $filename);
    }
    return $seoName;
}

function deleteImage($location, $image)
{
    $imagePath = public_path($location . $image);
    if (File::exists($imagePath)) {
        File::delete($imagePath);
    }
}

function deleteTempImages()
{
    $directory = public_path('uploads/temp');
    if (File::isDirectory($directory)) {
        $files = File::allFiles($directory);
        foreach ($files as $file) {
            File::delete($file->getPathname());
        }
    }
}

function productCount()
{
    return Product::count();
}

function slugify($str)
{
    $language = app()->getLocale();
    return Str::slug($str, "-", $language);
}
