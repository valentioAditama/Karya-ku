<?php

use App\Http\Controllers\api\MyListKarya;
use App\Http\Controllers\api\MyProfile;
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


// // Guest
// // Home Page 
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::prefix('home')->group(function () {
//     // search
//     Route::get('search', [HomeController::class, 'search'])->name('home.search');
// });

// // Report Page
// Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
// Route::prefix('laporan')->group(function () {
//     Route::post('/add', [LaporanController::class, 'store'])->name('laporan.add');
//     Route::post('/edit/{id}', [LaporanController::class, 'update'])->name('laporan.update');
//     Route::post('/delete/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
// });

// // About Us Page
// Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang-kami');
// Route::prefix('tentang-kami')->group(function () {
//     Route::post('/add', [TentangKamiController::class, 'store'])->name('tentang-kami.add');
//     Route::post('/edit/{id}', [TentangKamiController::class, 'update'])->name('tentang-kami.update');
//     Route::post('/delete/{id}', [TentangKamiController::class, 'destroy'])->name('tentang-kami.destroy');
// });

// // Category Page
// Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
// Route::prefix('kategori')->group(function () {
//     Route::get('/fotografi', [KategoriController::class, 'fotografi'])->name('kategori.fotografi');
//     Route::get('/desain-grafis', [KategoriController::class, 'desain_grafis'])->name('kategori.desain-grafis');
//     Route::get('/seni-lukis', [KategoriController::class, 'seni_lukis'])->name('kategori.seni-lukis');
//     Route::get('/tulisan-kreatif', [KategoriController::class, 'tulisan_kreatif'])->name('kategori.tulisan-kreatif');
//     Route::get('/musik', [KategoriController::class, 'musik'])->name('kategori.musik');
//     Route::get('/video-film-pendek', [KategoriController::class, 'video_film_pendek'])->name('kategori.video-film.pendek');
//     Route::get('/kerajinan-tangan', [KategoriController::class, 'kerajinan_tangan'])->name('kategori.kerajinan-tangan');
//     Route::get('/kuliner', [KategoriController::class, 'kuliner'])->name('kategori.kuliner');
//     Route::get('/mode-dan-busana', [KategoriController::class, 'mode_dan_busana'])->name('kategori.mode-dan-busana');
//     Route::get('/teknologi-dan-inovasi', [KategoriController::class, 'teknologi_dan_inovasi'])->name('kategori.teknologi-dan-inovasi');
// });

// // Review Content Karya Page
// Route::get('/review-karyaku/{id}', [ReviewContentKarya::class, 'index'])->name('reviewKarya');

// // Community Page 
// Route::get('/komunitas', [KomunitasController::class, 'index'])->name('komunitas');
// Route::prefix('komunitas')->group(function () {
//     // search komunitas
//     Route::get('/search', [KomunitasController::class, 'search'])->name('komunitas.search');

//     // get method
//     Route::get('/create', [KomunitasController::class, 'create'])->name('komunitas.create');
//     Route::get('/review/{id}', [KomunitasController::class, 'review'])->name('komunitas.review');

//     // create community
//     Route::post('/create/community', [KomunitasController::class, 'store'])->name('komunitas.store');

//     // create community articel store
//     Route::post('/create/articel/{id}', [KomunitasController::class, 'storeArticel'])->name('komunitas.storeArticel');

//     // add members for users
//     Route::post('/create/articel/member/{id}', [KomunitasController::class, 'storeArticelMember'])->name('komunitas.storeArticelMember');

//     // Create Likes and Unlikes
//     Route::post('/create/articel/likes/{id}', [KomunitasController::class, 'storeArticelLikes'])->name('komunitas.storeArticelLikes');

//     // review comment
//     Route::get('/review/comment/{id}', [KomunitasController::class, 'reviewComment'])->name('komunitas.comment');
//     Route::post('/review/comment/store', [KomunitasController::class, 'storeComment'])->name('komunitas.comment-store');
// });
