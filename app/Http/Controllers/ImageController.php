<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Images as Images;

class ImageController extends Controller
{

    private $folder = 'public/blog';

    public function uploadImage(Request $request)
    {
        if ($request->hasFile("upload")) {
            $path = $request->file('upload')->store($this->folder);
            $path = explode("/", $path);
            $path = implode("/", array_slice($path, 1));
            $path = "/storage/" . $path;

            if ($path) {
                $this->saveToDB($path);
            }

            $res = [
                "uploaded" => true,
                "url" => $path,
            ];

            return json_encode($res);
        }
    }


    public function updateImageStatus(Request $request, $table, $article_id)
    {

        $this->setEmptyImages($table, $article_id);
        $images = $this->parseImages($request);
        $set = $this->setInfo($images, $table, $article_id);
        $emptyImages = $this->getEmptyImages();

        foreach ($emptyImages as $emptyImage) {
            $images = explode("/", $emptyImage);
            $image_name = array_pop($images);
            $this->deleteFromStore($this->folder . '/' . $image_name);
        }
        $this->deleteFromDB($emptyImages);
    }

    private function setEmptyImages($table, $article_id) {
        $images = Images::where("articles_id", $article_id)->where("table", $table)->get();
        foreach($images as $image) {
            $image->table = NULL;
            $image->articles_id = NULL;
            $image->save();
        }
    }

    private function saveToDB($path)
    {
        $image = new Images();
        $image->path = $path;
        $image->save();
    }

    private function deleteFromDB(array $paths)
    {
        foreach ($paths as $path) {
            $image = Images::where("path", $path)->delete();
        }
    }

    private function deleteFromStore($pathToImage)
    {
        return Storage::delete($pathToImage);
    }


    private function getEmptyImages()
    {
        $images = [];
        $result = Images::where("articles_id", null)->get()->toArray();

        foreach ($result as $value) {
            $images[] = $value["path"];
        }
        return $images;
    }

    private function parseImages(Request $request)
    {
        $images = [];
        $content = $request->content ? $request->content : "";
        $regex = "~src\s*=\s*\"(.+?)\"~";
        $res = preg_match_all($regex, $content, $images, PREG_PATTERN_ORDER);
        return $images[1];
    }

    private function setInfo(array $paths, $table, $articles_id)
    {
        $res = false;

        foreach ($paths as $path) {
            $image = Images::where('path', $path)->first();
            $image->table = $table;
            $image->articles_id = $articles_id;
            $image->save();

            $res = true;
        }

        return $res;
    }
}
