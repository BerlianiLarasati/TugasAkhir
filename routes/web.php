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
});


Route::get('/destinasi', function () {
    return view('destinasi');
});

Route::get('/register', function () {
    return view('register');
});
<<<<<<< HEAD


=======
>>>>>>> 0d057051ef50e2b0ea0b3c5f3b68286c31e66b9c
