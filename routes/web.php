<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home routes
Route::get('/', function () {
    return view('home.index');
})->name('home');

// Authentication routes
Route::get('/signup', [SignupController::class, 'create'])->name('register');
Route::get('/login', [LoginController::class, 'create'])->name('login');
