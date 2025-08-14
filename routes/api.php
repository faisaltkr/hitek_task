<?php

use App\Http\Controllers\HandsetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('handsets', HandsetController::class)->only('index','store','show');