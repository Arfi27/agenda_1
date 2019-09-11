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
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot', function () {
    return view('forgot_password');
});

// Auth::routes();

// Route::get('/', 'HomeController@index')->name('login');
// Route::get('/register', 'HomeController@index')->name('register');
