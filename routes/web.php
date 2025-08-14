<?php

use App\Http\Controllers\HandsetController;
use App\Models\Handset;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/handsets', [HandsetController::class,'getHandsets']);