<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;

Route::view('/', 'client/home')->name('client.home');
Route::get('/search', [SearchController::class, 'index'])->name('client.search');

Route::prefix('auth')->group(function(){
    Route::view('/registration', 'auth/registration')->name('auth.registration.view');
    Route::view('/login', 'auth/login')->name('auth.login.view');
    Route::view('/{name}', 'auth/user')->name('auth.user.view');
});
Route::prefix('_admin')->group(function(){
    Route::view('/','admin/dashboard')->name('admin.dashboard');
    Route::view('/posts','admin/posts')->name('admin.posts');
    Route::view('/categories','admin/categories')->name('admin.categories');
    Route::view('/settings','admin/settings')->name('admin.settings');
});

Route::prefix('api')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('/registration', [AuthController::class, 'registration'])->name('api.auth.registration');
        Route::post('/login', [AuthController::class, 'login'])->name('api.auth.login');
        Route::get('/logout', [AuthController::class, 'logout'])->name('api.auth.logout');
    });
    // admin panel
    Route::prefix('admin')->group(function(){
        Route::post('/registration', [AuthController::class, 'registration'])->name('api.admin.registration');
        Route::post('/login', [AuthController::class, 'login'])->name('api.admin.login');
        Route::get('/logout', [AuthController::class, 'logout'])->name('api.admin.logout');
    });
});
