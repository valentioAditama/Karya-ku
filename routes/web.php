<?php

use App\Http\Controllers\Admin\ArticelCommunity;
use App\Http\Controllers\Admin\CommunityComment;
use App\Http\Controllers\Admin\CommunityController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\KontenKaryaController;
use App\Http\Controllers\Admin\LaporanController as AdminLaporanController;
use App\Http\Controllers\Admin\RolePermission;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\ReviewContentKarya;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\UploadKaryaController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\MyListKaryaController;
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

    // My Profiles
    Route::get('/my-profile/{id}', [MyProfileController::class, 'index'])->name('my-profile');
    Route::prefix('my-profile')->group(function () {
        Route::post('/edit/{id}', [MyProfileController::class, 'update'])->name('my-profile.edit');
        Route::post('/delete/{id}', [MyProfileController::class, 'destroy'])->name('my-profile.delete');

        // add and update social media
        Route::post('/add-social-media', [MyProfileController::class, 'storeSocialMedia'])->name('my-profile.add-social-media');

        // add and update skills
        Route::post('/add-skills', [MyProfileController::class, 'storeSkills'])->name('my-profile.add-skills');
        Route::post('/update-skills', [MyProfileController::class, 'updateSkills'])->name('my-profile.update-skills');
        Route::delete('/delete-skills', [MyProfileController::class, 'deleteSkills'])->name('my-profile.delete-skills');
    });

    // Change Password
    Route::get('/login-change-password', [MyProfileController::class, 'login_change_password'])->name('my-profile.login-change-password');
    Route::prefix('reset-password')->group(function () {
        Route::post('login-change-password/check/{id}', [MyProfileController::class, 'login_change_password_check'])->name('my-profile.login-change-password.check');

        // reset password
        Route::get('/change-password/{id}', [MyProfileController::class, 'reset_password'])->name('my-profile.change-password');

        // change reset password
        Route::post('/change-password/change/{id}', [MyProfileController::class, 'change_password'])->name('my-profile.reset-password');
    });


    // my list karya
    Route::get('/my-karya/{id}', [MyListKaryaController::class, 'index'])->name('my-profile.karya');
    Route::prefix('my-karya')->group(function () {
        // Delete
        Route::delete('/delete/{id}', [MyListKaryaController::class, 'destroy'])->name('my-karya.destroy');
    });

    // Upload Karya Content
    Route::get('/upload', [UploadKaryaController::class, 'index'])->name('upload');
    Route::prefix('upload')->group(function () {
        Route::post('/add', [UploadKaryaController::class, 'store'])->name('upload.add');
        Route::post('/delete', [UploadKaryaController::class, 'destroy'])->name('upload.delete');

        // update from my list karya
        Route::get('/edit/{id}', [MyListKaryaController::class, 'edit'])->name('upload.edit');
        Route::post('/update/{id}', [MyListKaryaController::class, 'update'])->name('upload.update');
    });
});

// Admin
Route::middleware('isAdmin')->group(function () {
    // ================= Admin Page =============================
    Route::prefix('admin')->group(function () {
        // Dashboard
        Route::get('/home', [AdminHomeController::class, 'index'])->name('admin.home');
        // Management Users
        Route::get('/users', [UserController::class, 'index'])->name('admin.users');
        Route::prefix('users')->group(function () {
            // crud data
            Route::post('/add/{id}', [UserController::class, 'store'])->name('admin.users.store');
            Route::post('/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
            Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.delete');
        });

        // Laporan
        Route::get('/laporan', [AdminLaporanController::class, 'index'])->name('admin.laporan');
        Route::prefix('laporan')->group(function () {
            // crud data
            Route::post('/add/{id}', [AdminLaporanController::class, 'store'])->name('admin.laporan.store');
            Route::post('/update/{id}', [AdminLaporanController::class, 'update'])->name('admin.laporan.update');
            Route::delete('/delete/{id}', [AdminLaporanController::class, 'destroy'])->name('admin.laporan.delete');
        });

        // Community
        Route::get('/community', [CommunityController::class, 'index'])->name('admin.community');
        Route::prefix('community')->group(function () {
            // crud data
            Route::post('/add/{id}', [CommunityController::class, 'store'])->name('admin.community.store');
            Route::post('/update/{id}', [CommunityController::class, 'update'])->name('admin.community.update');
            Route::delete('/delete/{id}', [CommunityController::class, 'destroy'])->name('admin.community.delete');
        });

        // Community Comments
        Route::get('/community/comments', [CommunityComment::class, 'index'])->name('admin.community.comments');
        Route::prefix('community-comments')->group(function () {
            // crud data
            Route::post('/add/{id}', [CommunityComment::class, 'store'])->name('admin.community-comments.store');
            Route::post('/update/{id}', [CommunityComment::class, 'update'])->name('admin.community-comments.update');
            Route::delete('/delete/{id}', [CommunityComment::class, 'destroy'])->name('admin.community-comments.delete');
        });

        // content Karya
        Route::get('/content-karya', [KontenKaryaController::class, 'index'])->name('admin.content-karya');
        Route::prefix('content-karya')->group(function () {
            // crud data
            Route::post('/add/{id}', [KontenKaryaController::class, 'store'])->name('admin.content-karya.store');
            Route::post('/update/{id}', [KontenKaryaController::class, 'update'])->name('admin.content-karya.update');
            Route::delete('/delete/{id}', [KontenKaryaController::class, 'destroy'])->name('admin.content-karya.delete');
        });

        // Articel Community
        Route::get('/articel-community', [ArticelCommunity::class, 'index'])->name('admin.articel-community');
        Route::prefix('articel-community')->group(function () {
            // crud data
            Route::post('/add/{id}', [ArticelCommunity::class, 'store'])->name('admin.articel-community.store');
            Route::post('/update/{id}', [ArticelCommunity::class, 'update'])->name('admin.articel-community.update');
            Route::delete('/delete/{id}', [ArticelCommunity::class, 'destroy'])->name('admin.articel-community.delete');
        });
    });
});

// Guest
// Landing Page
Route::get('/', [LandingPage::class, 'index'])->name('landing-page');

// home page
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('home')->group(function () {
    // search
    Route::get('search', [HomeController::class, 'search'])->name('home.search');
});

// Laporan Page
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
Route::prefix('laporan')->group(function () {
    Route::post('/add', [LaporanController::class, 'store'])->name('laporan.add');
    Route::post('/edit/{id}', [LaporanController::class, 'update'])->name('laporan.update');
    Route::post('/delete/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
});

// Tentang Kami Page
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
Route::prefix('tentang-kami')->group(function () {
    Route::post('/add', [TentangKamiController::class, 'store'])->name('tentang-kami.add');
    Route::post('/edit/{id}', [TentangKamiController::class, 'update'])->name('tentang-kami.update');
    Route::post('/delete/{id}', [TentangKamiController::class, 'destroy'])->name('tentang-kami.destroy');
});

// Kategori Page
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::prefix('kategori')->group(function () {
    Route::get('/fotografi', [KategoriController::class, 'fotografi'])->name('kategori.fotografi');
    Route::get('/desain-grafis', [KategoriController::class, 'desain_grafis'])->name('kategori.desain-grafis');
    Route::get('/seni-lukis', [KategoriController::class, 'seni_lukis'])->name('kategori.seni-lukis');
    Route::get('/tulisan-kreatif', [KategoriController::class, 'tulisan_kreatif'])->name('kategori.tulisan-kreatif');
    Route::get('/musik', [KategoriController::class, 'musik'])->name('kategori.musik');
    Route::get('/video-film-pendek', [KategoriController::class, 'video_film_pendek'])->name('kategori.video-film.pendek');
    Route::get('/kerajinan-tangan', [KategoriController::class, 'kerajinan_tangan'])->name('kategori.kerajinan-tangan');
    Route::get('/kuliner', [KategoriController::class, 'kuliner'])->name('kategori.kuliner');
    Route::get('/mode-dan-busana', [KategoriController::class, 'mode_dan_busana'])->name('kategori.mode-dan-busana');
    Route::get('/teknologi-dan-inovasi', [KategoriController::class, 'teknologi_dan_inovasi'])->name('kategori.teknologi-dan-inovasi');
});

// review content Karya
Route::get('/review-karyaku/{id}', [ReviewContentKarya::class, 'index'])->name('reviewKarya');

// Komunitas Page
Route::get('/komunitas', [KomunitasController::class, 'index'])->name('komunitas');
Route::prefix('komunitas')->group(function () {
    // search komunitas
    Route::get('/search', [KomunitasController::class, 'search'])->name('komunitas.search');

    // get method
    Route::get('/create', [KomunitasController::class, 'create'])->name('komunitas.create');
    Route::get('/review/{id}', [KomunitasController::class, 'review'])->name('komunitas.review');

    // create community
    Route::post('/create/community', [KomunitasController::class, 'store'])->name('komunitas.store');

    // create community articel store
    Route::post('/create/articel/{id}', [KomunitasController::class, 'storeArticel'])->name('komunitas.storeArticel');

    // add members for users
    Route::post('/create/articel/member/{id}', [KomunitasController::class, 'storeArticelMember'])->name('komunitas.storeArticelMember');

    // Create Likes and Unlikes
    Route::post('/create/articel/likes/{id}', [KomunitasController::class, 'storeArticelLikes'])->name('komunitas.storeArticelLikes');

    // review comment
    Route::get('/review/comment/{id}', [KomunitasController::class, 'reviewComment'])->name('komunitas.comment');
    Route::post('/review/comment/store', [KomunitasController::class, 'storeComment'])->name('komunitas.comment-store');
});
