<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProfileController;

Route::get('/profile/{id}', [ProfileController::class, 'index']);





