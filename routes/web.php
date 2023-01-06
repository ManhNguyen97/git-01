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

Route::get('/', function () {
    return view('welcome');
});

Route::get('demoweb', function() { return view('travel.front-end.index'); });
Route::get('demoweb/about',function() { return view('travel.front-end.about'); });
Route::get('demoweb/blog', function() { return view('travel.front-end.blog'); });
Route::get('demoweb/blog-detail',function(){ return view('travel.front-end.blog-detail'); });
Route::get('demoweb/product', function() { return view('travel.front-end.product'); });
Route::get('demoweb/product-detail', function() { return view('travel.front-end.product-detail'); });

