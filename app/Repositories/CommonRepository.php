<?php
namespace App\Repositories;

use Illuminate\Http\Request;
use Validator;
use Notification;

class CommonRepository{
  public function uploadImage($request, $file, $path, $resize = true, $width = null, $height = null){
    $destinationPath = $path;
    $name = preg_replace('/\s+/', '', $file->getClientOriginalName());
    $filename = time().'_'.$name;

    // $file->move($destinationPath,$filename);
    if($resize){
      $filename_resize = $destinationPath.'/'.$filename;
      \Image::make($file->getRealPath())->resize($width,$height)->save($filename_resize);
    }else{
      $file->move($destinationPath,$filename);
    }
    return $img_url = asset($destinationPath).'/'.$filename;
  }
}
