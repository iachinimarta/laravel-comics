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
    $comicsList = config('comics');
    return view('links.homepage',['items'=>$comicsList]);
})->name('home_page');

Route::get('/comicDetail/{id}', function($id) {
    $comicsList = config('comics');
    $comicDetail = $comicsList[$id];
    return view('links.comicDetail', ['singleComic'=>$comicDetail]);
})->name('comic_detail');