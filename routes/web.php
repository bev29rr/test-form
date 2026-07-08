<?php

use App\Http\Controllers\Api\UserSearchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
});
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Route::middleware(['auth'])->get('/users/searchAll', [UserSearchController::class, 'searchAll']);

require __DIR__.'/settings.php';
