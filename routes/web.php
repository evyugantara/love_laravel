<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RiwayatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return ('Hello');
});


Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/riwayat', [RiwayatController::class, 'index']);


