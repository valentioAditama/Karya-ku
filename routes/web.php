<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPage;
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
