<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;

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

Route::get('/destination',[DestinasiController::class, 'index']);
Route::get('/destination/{id}',[DestinasiController::class, 'index']);
Route::post('/destination',[DestinasiController::class, 'store']);
Route::put('/destination/{id}',[DestinasiController::class, 'update']);
Route::delete('/destination/{id}',[DestinasiController::class, 'destroy']);


// area
// Route::get('/area', [AreaController::class, 'index']);
// Route::post('/area', [AreaController::class, 'store']);
