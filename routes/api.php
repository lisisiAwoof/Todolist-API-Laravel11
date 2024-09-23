<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TodolistController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Auth: Register 
Route::post('register', RegisterController::class);

//Auth: Login 
Route::post('/login', LoginController::class);

//Auth: Logout
Route::post('/logout', LogoutController::class)->middleware('auth:sanctum');

//Todolist
Route::apiResource('/todos', TodolistController::class)->middleware('auth:sanctum');
