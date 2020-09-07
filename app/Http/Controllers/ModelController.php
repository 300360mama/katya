<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConceptionArticle;


class ModelController extends Controller
{
    public function index(Request $request)
    {
        return view("model");
    }

    public function getConceptionArticle(Request $request)
    {
        $articles = ConceptionArticle::all()->toArray();
        $article_id =  $request->number ? (int) $request->number - 1 : 1;
        $article = [];

        
        if (array_key_exists($article_id, $articles)) {
            $article = $articles[$article_id];
            return view("conception_article", [
                "article"=> $article
            ]);
        }

        return redirect()->route('login');
        print_r($article);

        
    }
}
