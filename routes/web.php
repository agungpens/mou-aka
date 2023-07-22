<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Login
Route::get('/', 'App\Http\Controllers\LoginController@index')->name('login')->middleware('guest');
Route::post('login', 'App\Http\Controllers\LoginController@authenticate')->middleware('guest');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->middleware('auth');


// Dashboard
Route::get('home', 'App\Http\Controllers\web\DashboardController@index')->middleware('auth');

// User
Route::get('user/{id}', 'App\Http\Controllers\web\UserController@index')->middleware('auth');
