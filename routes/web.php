<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;

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

Route::view('/', 'home')->name('home');

// Route::group(['auth'=>'auth','as'=>'account.'], function() {
//     Route::get('/', 'SomeController@index')->name('test');
//     Route::get('/new', function(){
//             return redirect()->route('account.test');
//     });
// });

Route::get('/search', [SearchController::class, 'index'])->name('search.index');

Route::prefix('auth')->group(function(){
    Route::view('/registration', 'auth/registration')->name('auth.registration.view');
    Route::view('/login', 'auth/login')->name('auth.login.view');
    Route::view('/{name}', 'auth/user')->name('auth.user.view');
});

Route::prefix('api')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('/registration', [AuthController::class, 'registration'])->name('api.auth.registration');
        Route::post('/login', [AuthController::class, 'login'])->name('api.auth.login');
        Route::get('/logout', [AuthController::class, 'logout'])->name('api.auth.logout');
    });
});
