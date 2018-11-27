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


Route::get('/homes', function () {
    return view('home.homes');
});
Route::get('/','HomeController@index');



Route::get('/catalog','CatalogController@index');

Route::get('/promotions','PromotionController@index');


Route::get('/details', function () {
    return view('details');
});

/* PROFILE 4 SECTIONES*/
Route::get('/profileProvider', function () {
    return view('profileProvider');
});

Route::get('/employees', function () {
    return view('profileProvider-employees');
});

Route::get('/services', function () {
    return view('profileProvider-services');
});

Route::get('/catalog', function () {
    return view('profileProvider-catalog');
});



/* CARRITO */
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/about', function () {
    return view('about');
});



Route::get('/', function () {
    return view('homePrincipal');
});

// Auth::routes();

