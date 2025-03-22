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

// Combine all profile routes in one group
Route::middleware('auth')->group(function () {
    // Edit profile route
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Show profile route - only accessible to users with 'user' role
    Route::get('/profile', [ProfileController::class, 'show'])
        ->middleware('role:user')
        ->name('profile.show');
});

// Authentication routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::post('api/login', [LoginController::class, 'apiLogin']);

// Admin routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::post('users/{user}/roles', [App\Http\Controllers\UserController::class, 'assignRole'])->name('users.roles');
});

require __DIR__.'/auth.php';
