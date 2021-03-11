<?php

use Illuminate\Support\Facades\Route;

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
//frontend
Route::get('/', 'frontend\ProductController@getProducts');
Route::get('/product', function () {
    return view('pages.frontend.single');
});
Route::get('/login', function () {
    return view('pages.frontend.login');
});
Route::get('/register', function () {
    return view('pages.frontend.register');
});
Route::get('/checkout', function () {
    return view('pages.frontend.checkout');
});


//backend
Route::get('/admin', 'backend\ProductController@getProducts');

