<?php

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






route::view('/','home')->name('home');
route::view('/about', 'about')->name('about');
route::view('/contact', 'contact')->name('contact');
route::get('/portfolio', 'portfolioController@index')->name('portfolio');

route::post('contact', 'messagesController@store');






Route::get('/', function () {
    $nombre = "Pepe";

    return view('home', compact('nombre'));
})->name('home');

/*Route::view('/', 'home')->name('home');*/
