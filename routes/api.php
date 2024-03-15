<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TripController;
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
Route::post('/register',UserController::class.'@register');
Route::post('/login',UserController::class.'@login');
Route::post('/create_trip',TripController::class.'@create_trip')->middleware('auth:sanctum');
Route::post('/generate_trip',TripController::class.'@generate_trip')->middleware('auth:sanctum');
Route::delete('/delete_trip',TripController::class.'@delete_trip')->middleware('auth:sanctum');
Route::put('/update_trip',TripController::class.'@update_trip')->middleware('auth:sanctum');

