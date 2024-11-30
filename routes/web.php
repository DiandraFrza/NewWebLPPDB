<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/ppdb_siswa/daftar', [PPDBController::class, 'daftar'])->name('ppdb_siswa.daftar');
