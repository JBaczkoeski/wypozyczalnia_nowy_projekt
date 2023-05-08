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

Route::get('/', function () {
    return view('User.welcome');
});

Auth::routes();

Route::get('/cars', function (){
  return view('User.cars');
});

Route::get('/detailing', function (){
    return view('User.detailing');
});

//Admin

Route::get('/AdminWelcome', function (){
    return view('Admin.home');
});

Route::get('/AdminCars', function (){
    return view('Admin.cars');
});

Route::get('/CarAdd', function (){
    return view('Admin.carAdd');
});
