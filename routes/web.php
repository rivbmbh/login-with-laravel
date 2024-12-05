<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('auth');

Route::get('/auth/login', [AuthController::class, 'sign_in'])->name('sign_in')->middleware('guest');
Route::get('/auth/regist', [AuthController::class, 'sign_up'])->name('sign_up')->middleware('guest');
Route::get('/auth/logout', [AuthController::class, 'sign_out'])->name('sign_out');


Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);


// Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/redirect', [AuthController::class, 'redirect'])->name('redirect')->middleware('guest');
// Route::get('/callback', [AuthController::class, 'callback'])->name('callback')->middleware('guest');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
