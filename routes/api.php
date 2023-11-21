<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeladatController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('feladats', [FeladatController::class,'index']);
Route::get('feladats/{id}', [FeladatController::class,'show']);
Route::post('feladats', [FeladatController::class,'store']);
Route::put('feladats/{id}', [AirlineController::class, 'update']);
Route::delete('feladats/{id}', [FeladatController::class,'destroye']);

