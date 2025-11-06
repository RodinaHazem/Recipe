<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;





    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/Admin_Dashboard', RecipeController::class);

    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/', function () {
    return view('main');
});


