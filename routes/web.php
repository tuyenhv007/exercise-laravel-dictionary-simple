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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/search', function () {
   return view('search');
});

Route::post('/search', function (Illuminate\Http\Request $request) {
   $keyword = $request->keyword;
   $array = [
       "hello" => "xin chào",
       "book" => "sách",
       "apple" => "quả táo",
       "orange" => "quả cam",
       "person" => "con người"
   ];
    if (array_key_exists($keyword,$array))
    {
        $tran = $array[$keyword];
        return view('list', compact(['tran']));
    }
    else
    {
        return view('error');
    }
});
