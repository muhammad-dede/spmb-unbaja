<?php

use App\Http\Controllers\Auth\DaftarController;
use App\Http\Controllers\Auth\KeluarController;
use App\Http\Controllers\Auth\LupaPasswordController;
use App\Http\Controllers\Auth\MasukController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\VerifikasiController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    // Manual Daftar
    Route::get('/daftar', [DaftarController::class, 'daftar'])->name('daftar');
    Route::post('/daftar', [DaftarController::class, 'submit'])->name('daftar');
    // Manual Masuk
    Route::get('/masuk', [MasukController::class, 'masuk'])->name('masuk');
    Route::post('/masuk', [MasukController::class, 'submit'])->name('masuk');
    // Google Masuk/Daftar
    Route::get('/auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('auth.google.callback');
    // Lupa Password
    Route::get('/lupa-password', [LupaPasswordController::class, 'request'])->name('password.request');
    Route::post('/lupa-password', [LupaPasswordController::class, 'email'])->name('password.email');
    // Reset Password
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'reset'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'update'])->name('password.update');
});

Route::group(['middleware' => 'auth'], function () {
    // Verifikasi Email
    Route::get('/email/verify', [VerifikasiController::class, 'notice'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerifikasiController::class, 'verify'])->middleware('signed')->name('verification.verify');
    Route::post('/email/verification-notification', [VerifikasiController::class, 'send'])->middleware('throttle:6,1')->name('verification.send');
    // logout
    Route::post('/keluar', KeluarController::class)->name('keluar');
});
