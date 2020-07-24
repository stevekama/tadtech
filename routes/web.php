<?php

Route::get('/', 'PagesController@index');
Route::get('/shop', 'PagesController@shop');
Route::get('/cart', 'PagesController@cart');
Route::get('/contact', 'PagesController@contact');


// bring in categories
Route::resource('categories', 'CategoriesController');

// bring in products
Route::resource('products', 'ProductsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
