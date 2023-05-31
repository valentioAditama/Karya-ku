<?php

use App\Http\Controllers\Admin\CommunityController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\KontenKaryaController;
use App\Http\Controllers\Admin\RolePermission;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\ReviewContentKarya;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\UploadKaryaController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\UsersController;
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

// Auth 
Route::middleware('auth')->group(function () {

    // Community
    Route::prefix('komunitas')->group(function () {
        Route::get('/create', [KomunitasController::class, 'create'])->name('komunitas.create');
    });

    // My Profiles
    Route::get('/my-profile', [MyProfileController::class, 'index'])->name('my-profile');
    Route::prefix('my-profile')->group(function () {
        Route::get('/my-karya', [MyProfileController::class, 'my_karya'])->name('my-profile.karya');

        // ubah password
        Route::get('/login-change-password', [MyProfileController::class, 'login_change_password'])->name('my-profile.login-change-password');
        Route::get('/reset-password', [MyProfileController::class, 'reset_password'])->name('my-profile.reset-password');
    });

    // Upload Karya Content
    Route::get('/upload', [UploadKaryaController::class, 'index'])->name('upload');
    Route::prefix('upload')->group(function() {
        Route::post('/add', [UploadKaryaController::class, 'store'])->name('upload.add');        
        Route::post('/update', [UploadKaryaController::class, 'update'])->name('upload.update');        
        Route::post('/delete', [UploadKaryaController::class, 'destroy'])->name('upload.delete');        
    });


    // ================= Admin Page =============================
    Route::prefix('admin')->group(function () {
        // Dashboard
        Route::get('/home', [HomeAdminController::class, 'index'])->name('admin.home');

        // Management Users
        Route::get('/users', [UsersController::class, 'index'])->name('admin.users');

        // Laporan
        Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan');

        // Community
        Route::get('/community', [CommunityController::class, 'index'])->name('admin.community');

        // Community Comments
        Route::get('/community/comments', [CommunityController::class, 'adminPageComment'])->name('admin.community.comments');

        // content Karya
        Route::get('/content-karya', [KontenKaryaController::class, 'adminPage'])->name('admin.content-karya');

        // Role & permission
        Route::get('/role-permission', [RolePermission::class, 'index'])->name('admin.role-permission');
    });
});

// Guest
// Landing Page
Route::get('/', [LandingPage::class, 'index'])->name('landing-page');

// home page
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Komunitas Page
Route::get('/komunitas', [KomunitasController::class, 'index'])->name('komunitas');
Route::prefix('komunitas')->group(function () {
    Route::get('/review', [KomunitasController::class, 'review'])->name('komunitas.review');
    Route::get('/review/comment', [KomunitasController::class, 'reviewComment'])->name('komunitas.review');
});

// Laporan Page
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
Route::prefix('laporan')->group(function() {
    Route::post('/add', [LaporanController::class, 'store'])->name('laporan.add');
    Route::post('/edit/{id}', [LaporanController::class, 'update'])->name('laporan.update');
    Route::post('/delete/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
});

// Tentang Kami Page
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::prefix('tentang-kami')->group(function() {
    Route::post('/add', [TentangKamiController::class, 'store'])->name('tentang-kami.add');
    Route::post('/edit/{id}', [TentangKamiController::class, 'update'])->name('tentang-kami.update');
    Route::post('/delete/{id}', [TentangKamiController::class, 'destroy'])->name('tentang-kami.destroy');
});


// Kategori Page
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');


// review content Karya
Route::get('/review-karyaku', [ReviewContentKarya::class, 'index'])->name('reviewKarya');
