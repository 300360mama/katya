<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $article_number =  $request->number ? $request->number : null;
        return view("home");
    }

    public function getArticle(Request $request)
    {
        $article_number =  $request->number ? $request->number : 1;
        return view("article", ["article_number"=>(int) $article_number]);
    }
}
