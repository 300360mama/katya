<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Images as Images;

class ImageController extends Controller
{

    private $folder = 'public/blog';

    public static function saveToDB($path) {
        $image = new Images();
        $image->path = $path;
        $image->save();
    }

    public static function deleteFromDB($path) {
        $image = Images::where("path", $path)->delete();
    }

    public function uploadImage(Request $request) {
        if($request->hasFile("upload")) {

            $path = $request->file('upload')->store($this->folder);
            $path = explode( "/", $path);
            $path= implode("/", array_slice($path, 1));
            $path = "/storage/".$path; 

            if($path) {
                $this->save($path);
            }   

            $res = [
                "uploaded"=> true,
                "url"=> $path,
            ];
           
            return json_encode($res);
        }
        
    }

    public static function getEmptyImages() {
        $images = Images::where("article_id", null)->get();
    }

   public static function parseImages(Request $request) {
        $images = [];
        $content = $request->content ? $request->content : "";
        $regex = "~src\s*=\s*\"(.+?)\"~";
        $res= preg_match_all($regex, $content, $images, PREG_PATTERN_ORDER);
        return $images[1];

   }

  public static function setInfo(array $paths, $table, $articles_id) {
      $res = false;

      foreach($paths as $path) {
          $image = Images::where('path', $path)->first();
          $image->table = $table;
          $image->articles_id = $articles_id;
          $image->save();

          $res = true;
      }

      return $res;
      
  }
}
