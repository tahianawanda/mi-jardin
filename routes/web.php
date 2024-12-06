<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// CRUD Post
Route::resource('posts', PostController::class)->except(['index']);

//CRUD Plant
Route::resource('plants', PlantController::class)->except(['index']);

// Sections webs
Route::get('home', [HomeController::class, 'index'])->name('home.index');
Route::get('my-garden', [PlantController::class, 'index'])->name('plant.index');
Route::get('forums', [PostController::class, 'index'])->name('post.index');
Route::view('natures-map', 'naturemap');
Route::get('settings', [HomeController::class, 'index'])->name('setting.index');

//Login and register
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
