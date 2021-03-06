<?php

//front end
Route::get('/', 'WelcomeController@index');
Route::get('/product-category/{id}', 'WelcomeController@category');
Route::get('/product-details/{id}', 'WelcomeController@productDetails');

Route::post('/add-to-cart', 'CartController@addToCart');
Route::get('/show-cart', 'CartController@showCart');
Route::post('/update-cart-product', 'CartController@updateCart');
Route::get('/direct-add-to-cart/{id}', 'CartController@directAddToCart');
Route::get('/delete-cart-product/{rowId}', 'CartController@deleteCart');


//customer
Route::get('/checkout', 'CheckoutController@index');
Route::post('/customer-login', 'CheckoutController@customerLogin');
Route::post('/new-customer', 'CheckoutController@saveCusterInfo');
Route::get('/shipping-info', 'CheckoutController@showShippingInfo');
Route::post('/new-shipping', 'CheckoutController@saveShippingInfo');
Route::get('/payment-info', 'CheckoutController@showPaymentInfo');
Route::get('/new-order', 'CheckoutController@saveOrderInfo');



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
Route::get('/edit-product/{id}', 'ProductController@editProductInfo');
//Route::post('/manage-product', 'ProductController@manageProductInfo');

//slider management code
/*Route::get('/add-slider', 'SliderController@addSliderInfo');
Route::post('/new-slider', 'SliderController@saveSliderInfo');
Route::get('/manage-slider', 'SliderController@manageSliderInfo');
Route::get('/unpublished-slider/{id}', 'SliderController@unpublishedSliderInfo');
Route::get('/published-slider/{id}', 'SliderController@publishedSliderInfo');
Route::get('/edit-slider/{id}', 'SliderController@editSliderInfo');
Route::post('/update-slider', 'SliderController@updateSliderInfo');
Route::get('/delete-slider/{id}', 'SliderController@deleteSliderInfo');*/

//Home offer
Route::get('/add-offer','HomeofferController@addHomeOffer');
Route::post('/new-offer','HomeofferController@saveHomeOffer');
Route::get('/manage-offer', 'HomeofferController@manageHomeOffer');
Route::get('/view-offer/{id}', 'HomeofferController@viewHomeOffer');
Route::get('/edit-offer/{id}', 'HomeofferController@editHomeOffer');
Route::post('/update-offer', 'HomeofferController@updateHomeOffer');
Route::get('/delete-offer/{id}', 'HomeofferController@deleteHomeOffer');


//back end blog code
Route::get('/add-blog', 'BlogController@addBlog');
Route::get('/manage-blog', 'BlogController@manageBlog');
//Route::get('/manage-category', 'BlogController@editBlog');





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
