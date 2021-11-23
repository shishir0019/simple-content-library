<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/auth/registration', [AuthController::class, 'registrationView'])->name('auth.registration.form');
Route::post('/auth/registration', [AuthController::class, 'registration'])->name('auth.registration');
Route::get('/auth/login', [AuthController::class, 'loginView'])->name('auth.login.form');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/search', [SearchController::class, 'index'])->name('search.index');
