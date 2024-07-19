<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware(['auth'])->group(function () {
    // Rutas para las plantas
    Route::get('/plant', [PlantController::class, 'index'])->name('plant.index');
    Route::get('/plant/create', [PlantController::class, 'create'])->name('plant.create');
    Route::post('/plant/store', [PlantController::class, 'store'])->name('plant.store');
    Route::get('/plant/{id}/edit', [PlantController::class, 'edit'])->name('plant.edit');
    Route::put('/plant/{id}/update', [PlantController::class, 'update'])->name('plant.update');
    Route::delete('/plant/{id}/destroy', [PlantController::class, 'destroy'])->name('plant.destroy');
    Route::get('/plant/{id}', [PlantController::class, 'show'])->name('plant.show');


// Ejemplo de protección de ruta en routes/web.php
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}/update', [ProfileController::class, 'update'])->name('profile.update');



    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
    Route::view('/explore', '/dashboard/explore')->name('explore.show');
});





