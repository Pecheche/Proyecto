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


route::get('/portfolio', 'projectController@index')->name('projects.index');
route::get('/portfolio/crear', 'projectController@create')->name('projects.create');
route::get('/portfolio/{project}/editar', 'projectController@edit')->name('projects.edit');
route::patch('/portfolio/{project}', 'projectController@update')->name('projects.update');

route::delete('/portfolio/{project}', 'projectController@destroy')->name('projects.destroy');

route::post('/portfolio', 'projectController@store')->name('projects.store');

route::get('/portfolio/{project}', 'projectController@show')->name('projects.show');







route::view('/contact', 'contact')->name('contact');
route::post('contact', 'messageController@store')->name('messages.store');






Route::get('/', function () {
    $nombre = "Pepe";

    return view('home', compact('nombre'));
})->name('home');

/*Route::view('/', 'home')->name('home');*/
