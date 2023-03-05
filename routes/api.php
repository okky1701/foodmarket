<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FoodController;
use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\API\UserController;


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('user', [UserController::class, 'updateProfile']);
    Route::post('user/photo', [UserController::class, 'updatePhoto']);
    Route::post('logout', [UserController::class, 'logout']);

    Route::get('transaction',[TransactionController::class, 'all']);
});


Route::post('login',[UserController::class,'login']);
Route::post('register',[UserController::class,'register']);

Route::get('food', [FoodController::class, 'all']);
