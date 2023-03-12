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

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/destinasi', function () {
    return view('destinasi');
})->name('destinasi');

Route::get('/umkm', function () {
    return view('umkm');
})->name('umkm');

Route::get('/register', function () {
    return view('register');
})->name('register');
