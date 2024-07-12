<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::view('/plants', 'dashboard.plants')->name('plants');
    Route::view('/profile', 'dashboard.profile')->name('profile');
    Route::view('/history', 'dashboard.history')->name('history');
});





