<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', [FeedController::class, 'index'])->middleware(['auth', 'verified'])->name('feed');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'redirectToUserProfile']);

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/{user}', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/{user}/photos', [ProfileController::class, 'showPhotos'])->name('profile.showPhotos');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
