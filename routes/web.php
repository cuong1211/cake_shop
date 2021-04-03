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
Route::get('/product/{id}', 'frontend\ProductController@getSingle');
Route::get('/addproduct/{id}', 'frontend\ProductController@addProducts');
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
Route::get('/search', 'backend\ProductController@search');
Route::get('/admin', 'backend\ProductController@getProducts');
Route::get('/createProduct', 'backend\ProductController@createProducts');
Route::post('/createProduct', 'backend\ProductController@postcreateProducts');
Route::get('/editProduct/{id}', 'backend\ProductController@editProducts');
Route::post('/editProduct/{id}', 'backend\ProductController@posteditProducts');
Route::delete('/deleteProduct/{id}', 'backend\ProductController@deleteProducts');
Route::get('/search','backend\ProductController@search');





