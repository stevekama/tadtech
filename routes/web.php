<?php

// use Illuminate\Routing\Route;

Route::get('/', 'PagesController@index');

Route::get('/shop', 'PagesController@shop');

Route::get('/shop/categories/{category}', 'PagesController@category');

Route::get('/shop/product/{product}', 'PagesController@product');

Route::get('/cart', 'PagesController@cart');

Route::get('/contact', 'PagesController@contact');


// bring in categories
Route::resource('categories', 'CategoriesController');

// bring in products
Route::resource('products', 'ProductsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');