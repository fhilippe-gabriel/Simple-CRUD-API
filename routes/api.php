<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('customer', [CustomerController::class, 'index']);
Route::post('customer', [CustomerController::class, 'store']);
Route::get('show/{id}', [CustomerController::class, 'show']);
Route::put('customer/{id}', [CustomerController::class, 'update']);
Route::delete('customer/{id}', [CustomerController::class, 'destroy']);
