<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\UmkmCategoryController;
use App\Http\Controllers\UmkmController;
use App\Models\umkm_category;

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

// Route::get('/umkm', [UmkmCategoryController::class,"index"])->name('umkmcategory');

Route::get('/umkm', [UmkmController::class,"index"])->name('umkm');

Route::get('/umkm-detail', [UmkmController::class,"detail"])->name('umkm-detail');


// Route::get('/umkm-detail', function () {
//     return view('umkm-detail');
// })->name('umkm-detail');

Route::get('/registrasi', function () {
    return view('register');
})->name('register');

Route::get('/beranda', function () {
    return view('index');
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

// untuk Destinasi Superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin/destinasi', [SuperadminController::class, 'destinasi'])->name('Sdestinasi');
});

// Create Destinasi Superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin/destinasi/create_destinasi', [SuperadminController::class, 'create_destinasi'])->name('Sdestinasi_create');
});
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::post('/superadmin/destinasi/insert_destinasi', [SuperadminController::class, 'insert_destinasi'])->name('Sdestinasi_insert');
});

// Edit Destinasi Superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin/destinasi/edit_destinasi', [SuperadminController::class, 'edit_destinasi'])->name('Edestinasi');
});

Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/superadmin/destinasi/edit_destinasi/{id}', [SuperadminController::class, 'update_destinasi'])->name('Edestinasi_edit');
});

// Delete Destinasi Superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin/destinasi/edit_destinasi', [SuperadminController::class, 'edit_destinasi'])->name('Edestinasi');
});

Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/superadmin/destinasi/edit_destinasi/{id}', [SuperadminController::class, 'update_destinasi'])->name('Edestinasi_edit');
});

// UMKM Superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/superadmin/umkm', [SuperadminController::class, 'umkm'])->name('Sumkm');
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
Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/contributor/umkm/create_destinasi', [ContributorController::class, 'umkm'])->name('Cumkm');
});