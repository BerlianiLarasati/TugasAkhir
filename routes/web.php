<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\umkmController;
use App\Http\Controllers\CumkmController;
use App\Http\Controllers\contriController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\Controller;
use App\Http\Middleware\contri;
use App\Models\event;
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

// Public
Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/dest', [homeController::class, 'destinasi'])->name('publicDestinasi');
Route::get('dest/detail/{id}', [homeController::class, 'detail'])->name('detailDestinasi');
Route::get('/dest/filter', [homeController::class, 'filter'])->name('filterDestinasi');
Route::get('/usaha', [homeController::class, 'umkm'])->name('publicUmkm');
Route::get('usaha/detail/{id}', [homeController::class, 'detailUmkm'])->name('detailUmkm');
Route::get('/usaha/filter', [homeController::class, 'filterUmkm'])->name('filterUmkm');

// Proses Registrasi
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/register/proses', [registerController::class, 'prosesRegister'])->name('prosesRegister');

// Proses Login dengan admin atau contri
Route::post('/login/proses', [loginController::class, 'prosesLogin'])->name('prosesLogin');
route::get('logout', [logoutController::class, 'logout'])->name('logout');

// Admin 
Route::get('admin', [homeController::class, 'admin'])->name('admin')->middleware('auth', 'admin');
// Destinasi
Route::get('admin/destinasi', [adminController::class, 'index'])->name('destinasi')->middleware('auth', 'admin');
Route::get('admin/destinasi/tambah', [adminController::class, 'tambahDestinasi'])->name('tambahDestinasi')->middleware('auth', 'admin');
Route::post('admin/destinasi/store', [adminController::class, 'store'])->name('storeDestinasi')->middleware('auth', 'admin');
Route::get('admin/destinasi/delete/{id}', [adminController::class, 'delete'])->name('deleteDestinasi')->middleware('auth', 'admin');
Route::get('admin/destinasi/edit/{id}', [adminController::class, 'edit'])->name('editDestinasi')->middleware('auth', 'admin');
Route::post('admin/destinasi/update/{id}', [adminController::class, 'update'])->name('updateDestinasi')->middleware('auth', 'admin');
Route::delete('admin/destinasi/delete/{id}', [adminController::class, 'delete'])->name('deleteDestinasi')->middleware('auth', 'admin');
Route::get('admin/destinasi/search', [adminController::class, 'search'])->name('searchDestinasi');

// umkm
Route::get('admin/umkm', [umkmController::class, 'indexUmkm'])->name('umkm')->middleware('auth', 'admin');
Route::get('admin/umkm/tambah', [umkmController::class, 'tambahUmkm'])->name('tambahUmkm')->middleware('auth', 'admin');
Route::post('admin/umkm/store', [umkmController::class, 'storeUmkm'])->name('storeUmkm')->middleware('auth', 'admin');
Route::get('admin/umkm/edit/{id}', [umkmController::class, 'editUmkm'])->name('editUmkm')->middleware('auth', 'admin');
Route::get('admin/umkm/delete/{id}', [umkmController::class, 'deleteUmkm'])->name('deleteUmkm')->middleware('auth', 'admin');
Route::post('admin/umkm/update/{id}', [umkmController::class, 'updateUmkm'])->name('updateUmkm')->middleware('auth', 'admin');
Route::delete('admin/umkm/delete/{id}', [umkmController::class, 'deleteUmkm'])->name('deleteUmkm')->middleware('auth', 'admin');
Route::get('admin/umkm/search', [umkmController::class, 'searchUmkm'])->name('searchUmkm');

//Contri 
Route::get('contri', [homeController::class, 'contri'])->name('contri')->middleware('auth', 'contri');

//Destinasi 
Route::get('contri/destinasi', [contriController::class, 'index'])->name('destinasic')->middleware('auth', 'contri');
Route::get('contri/destinasi/tambah', [contriController::class, 'tambahDestinasi'])->name('tambahDestinasic')->middleware('auth', 'contri');
Route::post('contri/destinasi/store', [contriController::class, 'store'])->name('storeDestinasic')->middleware('auth', 'contri');
Route::get('contri/destinasi/delete/{id}', [contriController::class, 'delete'])->name('deleteDestinasic')->middleware('auth', 'contri');
Route::get('contri/destinasi/edit/{id}', [contriController::class, 'edit'])->name('editDestinasic')->middleware('auth', 'contri');
Route::post('contri/destinasi/update/{id}', [contriController::class, 'update'])->name('updateDestinasic')->middleware('auth', 'contri');
Route::delete('contri/destinasi/delete/{id}', [contriController::class, 'delete'])->name('deleteDestinasic')->middleware('auth', 'contri');
Route::get('contri/destinasi/search', [contriController::class, 'search'])->name('searchDestinasic');

// umkm
Route::get('contri/umkm', [CumkmController::class, 'indexUmkmc'])->name('umkmc')->middleware('auth', 'contri');
Route::get('contri/umkm/tambah', [CumkmController::class, 'tambahUmkmc'])->name('tambahUmkmc')->middleware('auth', 'contri');
Route::post('contri/umkm/store', [CumkmController::class, 'storeUmkmc'])->name('storeUmkmc')->middleware('auth', 'contri');
Route::get('contri/umkm/edit/{id}', [CumkmController::class, 'editUmkmc'])->name('editUmkmc')->middleware('auth', 'contri');
Route::post('contri/umkm/update/{id}', [CumkmController::class, 'updateUmkmc'])->name('updateUmkmc')->middleware('auth', 'contri');
Route::delete('contri/umkm/delete/{id}', [CumkmController::class, 'deleteUmkmc'])->name('deleteUmkmc')->middleware('auth', 'contri');
Route::get('contri/umkm/search', [CumkmController::class, 'searchUmkmc'])->name('searchUmkmc');
