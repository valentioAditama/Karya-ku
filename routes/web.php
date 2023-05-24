<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

// Landing Page
Route::get('/', [LandingPage::class, 'index'])->name('landing-page');

// home page
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Komunitas Page
Route::get('/komunitas', [KomunitasController::class, 'index'])->name('komunitas');

// Laporan Page
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');

// Tentang Kami Page
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');

// Kategori Page
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');