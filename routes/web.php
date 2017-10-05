<?php


Route::get('/', 'WelcomeController@index');
Route::get('/category', 'WelcomeController@category');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
