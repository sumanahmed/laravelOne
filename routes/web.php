<?php


Route::get('/', 'WelcomeController@index');
Route::get('/about', 'WelcomeController@about');

Route::get('/basis/bitm/hello', 'WelcomeController@hello');



