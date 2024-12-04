<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

// arahkan ke halaman google login
Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

// jika berhasil login arahkan ke halaman berikutnya
Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();

    // $user->token
});