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

Route::get('register', '\App\Http\Controllers\AuthController@showRegisterForm');
Route::post('register', '\App\Http\Controllers\AuthController@register');
Route::get('login', '\App\Http\Controllers\AuthController@showLoginForm');
Route::post('login', '\App\Http\Controllers\AuthController@login');
Route::get('logout', '\App\Http\Controllers\AuthController@logout');

Route::get('/main', function () {
    return view('content.main');
});
Route::get('/products', function () {
    return view('content.products');
});
Route::get('/contact', function () {
    return view('content.contact');
});
Route::get('/verification', function () {
    return view('auth.verify');
});
