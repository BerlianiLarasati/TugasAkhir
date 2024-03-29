<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationControoller;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ContributorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/destination',[DestinationControoller::class, 'index']);
Route::post('/destination',[DestinationControoller::class, 'store']);


// area
Route::get('/area', [AreaController::class, 'index']);
Route::post('/area', [AreaController::class, 'store']);

Route::post('/umkm', [ContributorController::class,'insert_umkm']);
