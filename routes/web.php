<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::get('/tours', 'PageController@tours');
Route::get('/services', 'PageController@services');
Route::get('/booking', 'PageController@booking');
Route::get('/contact', 'PageController@contact');
