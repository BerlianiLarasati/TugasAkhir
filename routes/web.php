<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\UmkmController;

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

Route::get('/umkm', [UmkmController::class,"index"])->name('umkm');

Route::get('/registrasi', function () {
    return view('register');
})->name('register');

Route::get('/beranda', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/wkwkwk/coba', function () {
    return view('contributor.coba.coba');
});


//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/masuk', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'index']);
});


// untuk Contributor
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/contributor', [ContributorController::class, 'index']);

});

// untuk Destinasi Contributor
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/contributor/destinasi', [ContributorController::class, 'destinasi'])->name('Cdestinasi');
});

// Create Destinasi Contributor
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/contributor/destinasi/create_destinasi', [ContributorController::class, 'create_destinasi'])->name('Cdestinasi_create');
});
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::post('/contributor/destinasi/insert_destinasi', [ContributorController::class, 'insert_destinasi'])->name('Cdestinasi_insert');
});

// Edit Destinasi Contributor
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/contributor/destinasi/edit_destinasi', [ContributorController::class, 'edit_destinasi'])->name('Edestinasi');
});

Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/contributor/destinasi/edit_destinasi/{id}', [ContributorController::class, 'update_destinasi'])->name('Edestinasi_edit');
});
// CRUD Contributor



// untuk umkm
Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/contributor/umkm', [ContributorController::class, 'umkm'])->name('Cumkm');
});