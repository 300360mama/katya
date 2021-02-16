<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "HomeController@index")->name("home");
Route::get('/english_model', "EnglishModelController@index")->name("english-model");
Route::get('/model', "ModelController@index")->name("model");
Route::get('/model/{number}', "ModelController@getConceptionArticle")->name("model-article");
Route::get('/articles', "ArticleController@index")->name("articles");
Route::get('/article/{id}', "ArticleController@showArticle")->name("show-article");
Route::get('/home/rules', "HomeController@rules")->name("home-rules");
Route::get('/home/services', "HomeController@services")->name("home-services");
Route::get('/home/advice', "HomeController@advice")->name("home-advice");

Auth::routes();
Route::post("/crud/create/{table}", "CrudController@create");
Route::post("/crud/delete/{table}", "CrudController@delete");
Route::post("/crud/show/{table}", "CrudController@show");
Route::get("/crud/read/{table}", "CrudController@read");
Route::post("/crud/update/{table}", "CrudController@update")->name("crud-update");
Route::get("/crud/addNewRow/{table}", "CrudController@addNewRow");
Route::get("/crud", "CrudController@index");
Route::post("/crud/uploadImage", "ImageController@uploadImage");



