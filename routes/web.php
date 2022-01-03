<?php

use App\Http\Controllers\Application\HomeController;
use App\Http\Controllers\Auth\DaftarController;
use App\Http\Controllers\Auth\KeluarController;
use App\Http\Controllers\Auth\MasukController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [WebController::class, 'index'])->name('index');
    Route::get('/fakultas', [WebController::class, 'fakultas'])->name('fakultas');
    Route::get('/kontak-kami', [WebController::class, 'kontakKami'])->name('kontak-kami');
    Route::get('/tanya-jawab', [WebController::class, 'tanyaJawab'])->name('tanya-jawab');
    // Manual Daftar
    Route::get('/daftar', [DaftarController::class, 'daftar'])->name('daftar');
    Route::post('/daftar', [DaftarController::class, 'submit'])->name('daftar');
    // Manual Masuk
    Route::get('/masuk', [MasukController::class, 'masuk'])->name('masuk');
    Route::post('/masuk', [MasukController::class, 'submit'])->name('masuk');
    // Google Masuk/Daftar
    Route::get('/auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('auth.google.callback');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', HomeController::class)->name('home');
    Route::post('/keluar', KeluarController::class)->name('keluar');
});
