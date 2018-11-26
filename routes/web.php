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

Route::get('/home', function () {
    return view('homePrincipal');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/promotions', function () {
    return view('promotions');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/profileProvider', function () {
    return view('profileProvider');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/homes', function () {
    return view('homes');
});

Route::get('/', function () {
    return view('auth.login');
});

// Auth::routes();

