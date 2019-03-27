<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/store', 'SiteController@store');
Route::get('/gallery', 'SiteController@gallery');
Route::get('/contacts', 'SiteController@contacts');
Route::get('/car-tour', 'SiteController@carTour');

Route::resource('product', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/description', 'HomeController@setDescription');
