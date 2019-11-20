<?php


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home1','UsuarioController@Home');
Route::get('/home','HomeController@page_json')->name('home');
Route::get('/isset','HomeController@empty_isset')->name('isset');

Route::get('/formulario','HomeController@formulario')->name('form');

Route::get('/upload','HomeController@upload')->name('upload');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/page', 'HomeController@page')->name('page');


Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/check/{userId}/{modulo}', 'HomeController@check')->name('check');

Route::get('/modulo', 'HomeController@modulo')->name('modulo');