<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $article_res = Article::paginate(2);
        $articles = $article_res ? $article_res : [];
        return view("articles", ["articles" => $articles]);

    }

    public function showArticle(Request $request) {
        $article_id = (int) $request->id ? (int) $request->id : 1; 
        $article = Article::where("id", $article_id)->first();
                
        return view("article", ["article"=>$article]);

    }

}
