<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// CRUD Post
Route::resource('posts', PostController::class)->except(['index']);

//Login and register
Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //CRUD Plant
    Route::get('/plant/create', [PlantController::class, 'create'])->name('plant.create');
    Route::post('/plant/create', [PlantController::class, 'store'])->name('plant.store');
    Route::get('/plant/show/{id}', [PlantController::class, 'show'])->name('plant.show');
    Route::get('/plant/edit/{id}', [PlantController::class, 'edit'])->name('plant.edit');
    Route::post('/plant/edit/{id}', [PlantController::class, 'update'])->name('plant.update');
    Route::post('/plant/destroy', [PlantController::class, 'destroy'])->name('plant.destroy');


    // Sections webs
    Route::redirect('/', '/home');
    Route::get('home', [HomeController::class, 'index'])->name('home.index');
    Route::get('my-garden', [PlantController::class, 'index'])->name('plant.index');
    Route::get('forums', [PostController::class, 'index'])->name('post.index');
    Route::view('natures-map', 'naturemap');
    Route::get('settings', [HomeController::class, 'index'])->name('setting.index');
});


require __DIR__ . '/auth.php';
