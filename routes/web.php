<?php

use App\Http\Controllers\RegisterController;
use App\Models\Municipality;
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

//tmp redirect
Route::redirect('/', app()->getLocale(), 301);


Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);


Route::view('/test', 'test', ['municipalities' => Municipality::with(['streets','numbers'])->get()]);
// Route::view('/test', 'test', ['municipalities' => Municipality::with(['streets'])->get()]);

Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => 'de|it']
], function () {

    //tmp redirect
    Route::redirect('/', '/'.app()->getLocale().'/home', 301);

    Route::get('/home', function ($lang) {
        return view('root', [
            'lang' => $lang,
            'news' => News::limit(6)->latest()->get(),
            'providers' => Provider::inRandomOrder()->get(),
        ]);
    })->name('home');


    Route::get('/news', function ($lang) {
        return view('news', [
            'lang' => $lang,
            'news' => News::get(),
        ]);
    })->name('news');

    Route::get('/news/{article:slug_'.app()->getLocale().'}', function ($lang ,News $article) {
        return view('article', [
            'lang' => $lang,
            'article' => $article,
        ]);
    })->name('article');

});
