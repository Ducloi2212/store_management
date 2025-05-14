<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\CategoryController;

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/login', [CrudUserController::class, 'login'])->name('login');
Route::post('/login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/category', [CategoryController::class, 'categoryProduct'])->name('category.product');

Route::get('/', function () {
    return view('welcome');
});

