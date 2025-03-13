<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PelangganController;

// Route::get('/', fungetction () {
//     return view('welcome');index
// });

Route::get('/', [HomepageController::class, 'index']);

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/add', [PelangganController::class, 'add']);
Route::get('/pelanggan/edit', [PelangganController::class, 'edit']);
Route::get('/pelanggan/destroy', [PelangganController::class, 'destroy']);
Route::post('/pelanggan/store', [PelangganController::class, 'store']);
