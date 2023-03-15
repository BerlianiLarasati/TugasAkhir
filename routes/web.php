<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;

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


// route destination
Route::get('/destination',[DestinasiController::class, 'index']);
Route::get('/destination/{id}',[DestinasiController::class, 'show']);
Route::post('/destination',[DestinasiController::class, 'store']);
Route::put('/destination/{id}',[DestinasiController::class, 'update']);
Route::delete('/destination/{id}',[DestinasiController::class, 'destroy']);