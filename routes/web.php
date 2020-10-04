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

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'WelcomeController@index');
Route::get('/admin', 'AdminController@index')->middleware('auth','accAdmin');
Route::get('/wishlist', 'wishlistController@index')->middleware('auth');
Route::get('/logout', 'LogoutController@index');
Route::resource('Admin', 'AdminController');
Auth::routes();




