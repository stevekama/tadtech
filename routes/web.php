<?php

Route::get('/', 'PagesController@index');
Route::get('/shop', 'PagesController@shop');
Route::get('/cart', 'PagesController@cart');
Route::get('/contact', 'PagesController@contact');