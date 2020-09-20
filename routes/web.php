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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// posts 資料夾下的 list blade 檔，列出所有文章
Route::get('/posts', function () {
    return view('posts.list');
});

// 傳一個 id 進來， /posts/9478
Route::get('/posts/{id}', function ($id) {
    return view('posts.show');
});
