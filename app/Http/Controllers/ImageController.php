<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Images;

class ImageController extends Controller
{
    public static function save(Request $request) {
       
    }

    public function uploadImage(Request $request) {
        if($request->hasFile("upload")) {

            $path = $request->file('upload')->store('public/blog');
            $path = explode( "/", $path);
            $path= implode("/", array_slice($path, 1));
            $path = "/storage/".$path; 

            if($path) {
                $image = new Images();
                $image->path = $path;
                $image->save();
            }
            

            $res = [
                "uploaded"=> true,
                "url"=> $path,
            ];
           
            return json_encode($res);

        }
        
    }

   public static function parseImages(Request $request) {
    $images = [];
    $content = $request->content ? $request->content : "";
    $regex = "~src\s*=\s*\"(.+?)\"~";
    $images = preg_match_all($regex, $content, $r);

    return $images;

   }

   public static function setModelId(Model $model) {


   }
}
