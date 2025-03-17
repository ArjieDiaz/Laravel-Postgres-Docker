<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Protected routes - require authentication
Route::group(['middleware' => ['auth']], function () {
    // Products routes
    Route::resource('products', ProductController::class);
    
    // Dashboard route if it exists
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// User profile routes (assuming these use auth middleware already)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::post('api/login', [LoginController::class, 'apiLogin']);

require __DIR__.'/auth.php';
