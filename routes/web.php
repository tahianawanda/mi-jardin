<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MijardinController;

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.show');
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register.show');

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/dashboard', [MijardinController::class, 'showDashboard'])->name('dashboard.show');