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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login/google', 'HomeController@redirectToGoogleProvider');
Route::get('/login/google/callback', 'HomeController@handleProviderGoogleCallback');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
