<?php



Route::get('/local','LocalController@index')->name('local');

Route::post('/salvar','LocalController@store')->name('salvar');

Route::get('/estados','LocalController@states')->name('states');

Route::post('/estados','LocalController@storeState')->name('store.states');
