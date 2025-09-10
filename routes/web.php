<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;

// Root redirect
Route::get('/', function () {
    return session()->has('admin_id')
        ? redirect()->route('articles.index')        
        : redirect()->route('public.articles.index');
});

// Guest-only routes
Route::middleware('admin.guest')->group(function () {
    Route::get('register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register.post');
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
});

// Logout (only if logged in)
Route::post('logout', [AuthController::class, 'logout'])
    ->middleware('admin.auth')
    ->name('logout');

// Dashboard (only if logged in)
Route::middleware('admin.auth')->group(function () {
    Route::resource('/articles', ArticleController::class);
});

// Public view for everyone
Route::get('/blog', [PublicController::class, 'index'])->name('public.articles.index');
Route::get('/blog/{id}', [PublicController::class, 'show'])->name('public.articles.show');

