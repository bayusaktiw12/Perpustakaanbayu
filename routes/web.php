<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\BukuController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\DendaController;
use App\Http\Controllers\Frontend\PeminjamanController;
use App\Http\Controllers\Frontend\PengembalianController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['ceklogin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/anggota', function () {
        return view('page.frontend.anggota.dashboard');
    })->name('dashboard.anggota');

});

Route::resource('buku', BukuController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('pengembalian', PengembalianController::class);
Route::resource('denda', DendaController::class);
Route::post('/denda/bayar/{id}', [DendaController::class, 'bayar'])->name('denda.bayar');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginProses'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
