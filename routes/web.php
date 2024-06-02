<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\DasborController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

Route::name('autentikasi.')->group(function () {
    Route::get('/login', [AutentikasiController::class, 'masuk'])->name('masuk');
    Route::post('/login', [AutentikasiController::class, 'prosesMasuk']);
    Route::get('/register', [AutentikasiController::class, 'daftar'])->name('daftar');
    Route::post('/register', [AutentikasiController::class, 'prosesDaftar']);
    Route::get('/logout', [AutentikasiController::class, 'keluar'])->name('keluar');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [DasborController::class, 'indeks'])->name('dasbor');

    Route::prefix('kelas-saya')->group(function () {
        Route::get('/', [KelasController::class, 'indeks'])->name('kelas');
        Route::get('/tambah', [KelasController::class, 'tambah'])->name('kelas.tambah');
        Route::post('/tambah', [KelasController::class, 'prosesTambah']);
        Route::get('/{uuid}', [KelasController::class, 'detail'])->whereUuid('uuid')->name('kelas.detail');
        Route::get('/edit/{uuid}', [KelasController::class, 'edit'])->whereUuid('uuid')->name('kelas.edit');
        Route::put('/edit/{uuid}', [KelasController::class, 'prosesEdit'])->whereUuid('uuid');
        Route::get('/hapus/{uuid}', [KelasController::class, 'hapus'])->whereUuid('uuid')->name('kelas.hapus');
    });

    Route::get('/profil', [ProfilController::class, 'indeks'])->name('profil');
    Route::get('/tentang', [TentangController::class, 'indeks'])->name('tentang');
});
