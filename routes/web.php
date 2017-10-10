<?php

//front end
Route::get('/', 'WelcomeController@index');
Route::get('/category', 'WelcomeController@category');


//back end category code
Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/new-category', 'CategoryController@saveCategoryInfo');

Route::get('/manage-category', 'CategoryController@manageCategory');
Route::get('/edit-category', 'CategoryController@editCategory');


//back end blog code
Route::get('/add-blog', 'BlogController@addBlog');
Route::get('/manage-blog', 'BlogController@manageBlog');
Route::get('/manage-category', 'BlogController@editBlog');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
