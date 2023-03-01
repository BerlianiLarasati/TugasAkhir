<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

// Authentication
Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('auth');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


// Administrator
Route::get('home', [AdminController::class, 'index'])->middleware('auth')->name('admin.beranda');
// Administrator-Destinasi
Route::get('admin/destinasi', [AdminController::class, 'destinasi'])->name('admin.destinasi');
Route::get('admin/destinasi/add', [AdminController::class, 'destinasiAdd'])->name('admin.destinasi.add');
// Administrator-Kuliner
Route::get('admin/kuliner', [AdminController::class, 'kuliner'])->name('admin.kuliner');

