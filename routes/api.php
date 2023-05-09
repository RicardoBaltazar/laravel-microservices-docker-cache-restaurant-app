<?php

use App\Http\Controllers\Auth\CreateUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Restaurants\GetRestaurantsController;
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

Route::post('/login', LoginController::class);
Route::post('/create/user', CreateUserController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/restaurants', GetRestaurantsController::class);
});
