<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Halaman Utama
use App\Http\Controllers\PpdbController; // PPDB
use App\Http\Controllers\AdminController; // Admin Controller

Route::get('/', function () {
    return view('index');
});

// Halaman Utama
Route::get('/', [HomeController::class, 'index']);

// 
Route::get('/ppdb/daftar', [PpdbController::class, 'showForm'])->name('ppdb.daftar'); // Menampilkan form pendaftaran
Route::post('/ppdb/store', [PpdbController::class, 'store'])->name('ppdb.store'); // Menyimpan data pendaftaran

// Halaman Admin
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
