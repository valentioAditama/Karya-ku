<?php

use App\Http\Controllers\api\Home;
use App\Http\Controllers\api\Kategori;
use App\Http\Controllers\api\Komunitas;
use App\Http\Controllers\api\MyListKarya;
use App\Http\Controllers\api\MyProfile;
use App\Http\Controllers\api\ReviewContentKarya;
use App\Http\Controllers\api\TentangKami;
use App\Http\Controllers\api\UploadKarya;
use App\Http\Controllers\api\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// users 
Route::get('/users', [users::class, 'index']);
Route::get('/users/{id}', [users::class, 'show']);
Route::post('/users', [users::class, 'store']);
Route::put('/users/{id}', [users::class, 'update']);
Route::delete('/users/{id}', [users::class, 'destory']);

// My Profiles
Route::get('/my-profile/{id}', [MyProfile::class, 'index'])->name('my-profile');
Route::prefix('my-profile')->group(function () {
    Route::post('/edit/{id}', [Myprofile::class, 'update'])->name('my-profile.edit');
    Route::post('/delete/{id}', [Myprofile::class, 'destroy'])->name('my-profile.delete');

    // add and update social media
    Route::post('/add-social-media', [Myprofile::class, 'storeSocialMedia'])->name('my-profile.add-social-media');

    // add and update skills
    Route::post('/add-skills', [Myprofile::class, 'storeSkills'])->name('my-profile.add-skills');
    Route::post('/update-skills', [Myprofile::class, 'updateSkills'])->name('my-profile.update-skills');
    Route::delete('/delete-skills', [Myprofile::class, 'deleteSkills'])->name('my-profile.delete-skills');
});


// // change password 
Route::prefix('reset-password')->group(function () {
    Route::post('login-change-password/check/{id}', [MyProfile::class, 'login_change_password_check'])->name('my-profile.login-change-password.check');
    // change reset password
    Route::post('/change-password/change/{id}', [MyProfile::class, 'change_password'])->name('my-profile.reset-password');
});

// my list karya
Route::prefix('my-karya')->group(function () {
    // Delete
    Route::delete('/delete/{id}', [MyListKarya::class, 'destroy'])->name('my-karya.destroy');
});

// upload karya content
Route::prefix('upload')->group(function () {
    Route::post('/add', [UploadKarya::class, 'store'])->name('upload.add');

    // update from my list karya
    Route::get('/edit/{id}', [MyListKarya::class, 'edit'])->name('upload.edit');
    Route::post('/update/{id}', [MyListKarya::class, 'update'])->name('upload.update');
});


// Guest
// Home Page 
Route::get('/home', [Home::class, 'index'])->name('home');
Route::prefix('home')->group(function () {
    // search
    Route::get('search', [Home::class, 'search'])->name('home.search');
});

// // Report Page
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
Route::prefix('laporan')->group(function () {
    Route::post('/add', [LaporanController::class, 'store'])->name('laporan.add');
    Route::post('/edit/{id}', [LaporanController::class, 'update'])->name('laporan.update');
    Route::post('/delete/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
});

// // About Us Page
Route::prefix('tentang-kami')->group(function () {
    Route::post('/add', [TentangKami::class, 'store'])->name('tentang-kami.add');
});

// Category Page
Route::get('/kategori', [Kategori::class, 'index'])->name('kategori');
Route::prefix('kategori')->group(function () {
    Route::get('/fotografi', [Kategori::class, 'fotografi'])->name('kategori.fotografi');
    Route::get('/desain-grafis', [Kategori::class, 'desain_grafis'])->name('kategori.desain-grafis');
    Route::get('/seni-lukis', [Kategori::class, 'seni_lukis'])->name('kategori.seni-lukis');
    Route::get('/tulisan-kreatif', [Kategori::class, 'tulisan_kreatif'])->name('kategori.tulisan-kreatif');
    Route::get('/musik', [Kategori::class, 'musik'])->name('kategori.musik');
    Route::get('/video-film-pendek', [Kategori::class, 'video_film_pendek'])->name('kategori.video-film.pendek');
    Route::get('/kerajinan-tangan', [Kategori::class, 'kerajinan_tangan'])->name('kategori.kerajinan-tangan');
    Route::get('/kuliner', [Kategori::class, 'kuliner'])->name('kategori.kuliner');
    Route::get('/mode-dan-busana', [Kategori::class, 'mode_dan_busana'])->name('kategori.mode-dan-busana');
    Route::get('/teknologi-dan-inovasi', [Kategori::class, 'teknologi_dan_inovasi'])->name('kategori.teknologi-dan-inovasi');
});

// // Review Content Karya Page
Route::get('/review-karyaku/{id}', [ReviewContentKarya::class, 'index'])->name('reviewKarya');

// Community Page 
Route::get('/komunitas', [Komunitas::class, 'index'])->name('komunitas');
Route::prefix('komunitas')->group(function () {
    // search komunitas
    Route::get('/search', [Komunitas::class, 'search'])->name('komunitas.search');

    // get method
    Route::get('/review/{id}', [Komunitas::class, 'review'])->name('komunitas.review');

    // create community
    Route::post('/create/community', [Komunitas::class, 'store'])->name('komunitas.store');

    // create community articel store
    Route::post('/create/articel/{id}', [Komunitas::class, 'storeArticel'])->name('komunitas.storeArticel');

    // add members for users
    Route::post('/create/articel/member/{id}', [Komunitas::class, 'storeArticelMember'])->name('komunitas.storeArticelMember');

    // Create Likes and Unlikes
    Route::post('/create/articel/likes/{id}', [Komunitas::class, 'storeArticelLikes'])->name('komunitas.storeArticelLikes');

    // review comment
    Route::get('/review/comment/{id}', [Komunitas::class, 'reviewComment'])->name('komunitas.comment');
    Route::post('/review/comment/store', [Komunitas::class, 'storeComment'])->name('komunitas.comment-store');
});
