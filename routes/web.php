<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::view('/', 'client/home')->name('client.home');
Route::get('/search', [SearchController::class, 'index'])->name('client.search');

Route::prefix('auth')->group(function () {
    Route::view('/registration', 'auth/registration')->name('auth.registration.view');
    Route::view('/login', 'auth/login')->name('auth.login.view');
    Route::view('/{name}', 'auth/user')->name('auth.user.view');
});

Route::prefix('_admin')->group(function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::view('/', 'admin/dashboard/index')->name('admin.dashboard.view');
        // Route::view('/posts', 'admin/posts/index')->name('admin.posts.view');
        // Route::view('/categories', 'admin/categories/index')->name('admin.categories.view');        
        // posts
        Route::prefix('posts')->group(function () {
            Route::get('', [PostController::class, 'index'])->name('admin.posts.index');
            Route::get('/create', [PostController::class, 'create'])->name('admin.posts.create');
            Route::post('', [PostController::class, 'store'])->name('admin.posts.store');
            Route::get('/{id}/show', [PostController::class, 'show'])->name('admin.posts.show');
            Route::get('/{id}', [PostController::class, 'edit'])->name('admin.posts.edit');
            Route::patch('/{id}', [PostController::class, 'update'])->name('admin.posts.update');
            Route::delete('/{id}', [PostController::class, 'destroy'])->name('admin.posts.delete');
        });
        // categories
        Route::prefix('categories')->group(function () {
            Route::get('', [CategoryController::class, 'index'])->name('admin.categories.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
            Route::post('', [CategoryController::class, 'store'])->name('admin.categories.store');
            Route::get('/{id}/show', [CategoryController::class, 'show'])->name('admin.categories.show');
            Route::get('/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
            Route::patch('/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
            Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');
        });

        Route::view('/settings', 'admin/settings/index')->name('admin.settings.view');
        Route::view('/{name}', 'admin/user/index')->name('admin.user.view');
    });
    Route::prefix('auth')->group(function () {
        Route::view('/login', 'admin/auth/login')->name('admin.auth.login.view');
        Route::view('/registration', 'admin/auth/registration')->name('admin.auth.registration.view');
    });
});

Route::prefix('api')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('/registration', [AuthController::class, 'registration'])->name('api.auth.registration');
        Route::post('/login', [AuthController::class, 'login'])->name('api.auth.login');
        Route::get('/logout', [AuthController::class, 'logout'])->name('api.auth.logout');
    });
    // admin panel
    Route::prefix('_admin')->group(function () {
        Route::group(['middleware' => 'admin'], function () {
            Route::prefix('dashboard')->group(function () {
                Route::get('',)->name('api.admin.dashboard');
            });
        });
        Route::prefix('auth')->group(function () {
            Route::post('/registration', [AuthController::class, 'registrationAdmin'])->name('api.admin.auth.registration');
            Route::post('/login', [AuthController::class, 'loginAdmin'])->name('api.admin.auth.login');
            Route::get('/logout', [AuthController::class, 'logoutAdmin'])->name('api.admin.auth.logout');
        });
    });
});
