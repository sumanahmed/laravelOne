<?php

//front end
Route::get('/', 'WelcomeController@index');
Route::get('/product-category', 'WelcomeController@category');


//back end category code
Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/new-category', 'CategoryController@saveCategoryInfo');

Route::get('/manage-category', 'CategoryController@manageCategoryInfo');
Route::get('/unpublished-category/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/published-category/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');
Route::post('/update-category', 'CategoryController@updateCategoryInfo');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategoryInfo');

//back End Brand management
Route::get('/add-brand', 'BrandController@addBrand');
Route::post('/new-brand', 'BrandController@saveBrandInfo');
Route::get('/manage-brand', 'BrandController@manageBrandInfo');
Route::get('/unpublished-brand/{id}', 'BrandController@unpublishedBrandInfo');
Route::get('/published-brand/{id}', 'BrandController@publishedBrandInfo');
Route::get('/edit-brand/{id}', 'BrandController@editBrandInfo');
Route::post('/update-brand', 'BrandController@updateBrandInfo');
Route::get('/delete-brand/{id}', 'BrandController@deleteBrandInfo');


//Back End Product Management
Route::get('/add-product', 'ProductController@addProduct');
Route::post('/new-product', 'ProductController@saveProductInfo');
Route::get('/manage-product', 'ProductController@manageProductInfo');
Route::get('/view-product/{id}', 'ProductController@viewProductInfo');
//Route::post('/manage-product', 'ProductController@manageProductInfo');



//back end blog code
Route::get('/add-blog', 'BlogController@addBlog');
Route::get('/manage-blog', 'BlogController@manageBlog');
//Route::get('/manage-category', 'BlogController@editBlog');





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
