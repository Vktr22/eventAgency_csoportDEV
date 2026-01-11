<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::get('/users', [UserController::class, 'index']);        // Lista      //az adott class-nak az adott függvénye az index
//Route::get('/users/{user}', [UserController::class, 'show']); // Egy user
//Route::post('/users', [UserController::class, 'store']);      // Létrehozás
//Route::put('/users/{user}', [UserController::class, 'update']); // Frissítés
//Route::delete('/users/{user}', [UserController::class, 'destroy']); // Törlés
