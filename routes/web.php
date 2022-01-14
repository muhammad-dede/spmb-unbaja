<?php

use App\Http\Controllers\Application\AkunController;
use App\Http\Controllers\Application\HomeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Group Not Loged In
require __DIR__ . '/auth.php';

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [WebController::class, 'index'])->name('index');
    Route::get('/fakultas', [WebController::class, 'fakultas'])->name('fakultas');
    Route::get('/kontak-kami', [WebController::class, 'kontakKami'])->name('kontak-kami');
    Route::get('/tanya-jawab', [WebController::class, 'tanyaJawab'])->name('tanya-jawab');
});

// Group Loged In
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'user_data_uncompleted'], function () {
        Route::get('/lengkapi-data-diri', [AkunController::class, 'lengkapiDataDiriForm'])->name('lengkapi-data-diri');
        Route::post('/lengkapi-data-diri', [AkunController::class, 'lengkapiDataDiriSave'])->name('lengkapi-data-diri');
    });

    Route::group(['middleware' => ['verified', 'user_data_completed']], function () {
        Route::get('/home', HomeController::class)->name('home');
    });
});

// Master data AJAX
Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
    Route::get('/get-wilayah/{id}', [MasterController::class, 'getWilayah'])->name('get-wilayah');
});
