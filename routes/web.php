<?php

use App\Models\News;
use App\Models\Provider;
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

Route::get('/', function(){
    return view('root', [
        'news' => News::limit(6)->latest()->get(),
        'providers' => Provider::inRandomOrder()->get()
    ]);
});

Route::get('/news', function () {
    return view('news', [
        'news' => News::get()
    ]);
});

Route::get('/news/{post:slug}', function (News $post){
    return view('post',[
        'post' => $post
    ]);
});
