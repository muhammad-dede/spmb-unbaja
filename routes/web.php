<?php

use App\Http\Controllers\Application\HomeController;
use App\Http\Controllers\Application\UpdateDataDiriController;
use App\Http\Controllers\Auth\DaftarController;
use App\Http\Controllers\Auth\KeluarController;
use App\Http\Controllers\Auth\LupaPasswordController;
use App\Http\Controllers\Auth\MasukController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\VerifikasiController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Group Not Loged In
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
    // Lupa Password
    Route::get('/lupa-password', [LupaPasswordController::class, 'request'])->name('password.request');
    Route::post('/lupa-password', [LupaPasswordController::class, 'email'])->name('password.email');
    // Reset Password
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'reset'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'update'])->name('password.update');
});

// Group Loged In
Route::group(['middleware' => 'auth'], function () {
    // Verifikasi Email
    Route::get('/email/verify', [VerifikasiController::class, 'notice'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerifikasiController::class, 'verify'])->middleware('signed')->name('verification.verify');
    Route::post('/email/verification-notification', [VerifikasiController::class, 'send'])->middleware('throttle:6,1')->name('verification.send');

    Route::group(['middleware' => 'user_has_no_data'], function () {
        Route::get('/update-data-diri', [UpdateDataDiriController::class, 'edit'])->name('update-data-diri');
        Route::post('/update-data-diri', [UpdateDataDiriController::class, 'update'])->name('update-data-diri');
        Route::post('/update-data-diri/validasi/data-diri', [UpdateDataDiriController::class, 'ajaxValidateDataDiri'])->name('update-data-diri.validate.data-diri');
        Route::post('/update-data-diri/validasi/data-ortu', [UpdateDataDiriController::class, 'ajaxValidateDataOrtu'])->name('update-data-diri.validate.data-ortu');
    });

    // Group App Route
    Route::group(['middleware' => ['verified', 'user_has_data']], function () {
        Route::get('/home', HomeController::class)->name('home');
    });

    Route::post('/keluar', KeluarController::class)->name('keluar');
});

Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
    Route::get('/get-wilayah/{id}', [MasterController::class, 'getWilayah'])->name('get-wilayah');
});
