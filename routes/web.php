<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'home']);

Route::get('/', function () {
    return view('welcome');
});

