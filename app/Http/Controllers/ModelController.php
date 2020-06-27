<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index(Request $request)
    {

        $article_number =  $request->number ? $request->number : null;
        return view("model");
    }

    public function getArticle(Request $request)
    {
        $article_number =  $request->number ? $request->number : 1;
        return view("article", ["article_number"=>(int) $article_number]);
    }
}
