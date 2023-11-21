<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('feladat', [FeladatController::class,'index']);
Route::get('feladat/{id}', [FeladatController::class,'show']);
Route::post('feladat', [FeladatController::class,'store']);
Route::put('feladat/{id}', [FeladatController::class,'update']);
});
