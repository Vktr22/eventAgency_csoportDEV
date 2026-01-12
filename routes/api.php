<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);        // Lista      //az adott class-nak az adott függvénye az index
Route::get('/users/{user}', [UserController::class, 'show']); // Egy user
Route::post('/users', [UserController::class, 'store']);      // Létrehozás
Route::put('/users/{user}', [UserController::class, 'update']); // Frissítés
Route::delete('/users/{user}', [UserController::class, 'destroy']); // Törlés




// Ügynökségek végpontjai
Route::get('/agencies', [AgencyController::class, 'index']);        // Lista
Route::get('/agencies/{agency}', [AgencyController::class, 'show']); // Egy ügynökség
Route::post('/agencies', [AgencyController::class, 'store']);        // Létrehozás
Route::put('/agencies/{agency}', [AgencyController::class, 'update']); // Frissítés
Route::delete('/agencies/{agency}', [AgencyController::class, 'destroy']); // Törlés



