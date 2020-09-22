<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        return view("home");
    }

    public function getArticle(Request $request)
    {
        $article_number =  $request->number ? $request->number : 1;
        return view("article", ["article_number"=>(int) $article_number]);
    }

    public function rules(Request $request)
    {
        return view("static_page.rules_articles.rules");
    }

    public function services(Request $request)
    {
        return view("static_page.rules_articles.services");
    }

    public function advice(Request $request)
    {
        return view("static_page.rules_articles.advice");
    }
}
