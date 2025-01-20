<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Route ke halaman utama
Route::get('/', [AdminController::class, 'home']);

// Route ke halaman home
Route::get('/home', [AdminController::class, 'index'])->name('home');

// Route untuk halaman create_room
Route::get('/create_room', [AdminController::class, 'create_room']);