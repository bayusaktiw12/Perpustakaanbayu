<?php

use App\Http\Controllers\Frontend\BukuController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/buku', [BukuController::class, 'index']);