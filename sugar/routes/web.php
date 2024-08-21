<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/auth/regist", [\App\Http\Controllers\AuthController::class, "create"]);
Route::post("/auth/regist", [\App\Http\Controllers\AuthController::class, "store"]);
Route::get("/auth/login", [\App\Http\Controllers\AuthController::class, "login"]);
Route::post("/auth/login", [\App\Http\Controllers\AuthController::class, "login_store"]);
Route::get("/auth/logout", [\App\Http\Controllers\AuthController::class, "logout"]);
