<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\IbkppkadminController;
use App\Http\Controllers\IbkppkController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfiladminController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProgramkegiatanadminController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/galeri/detail_galeri', [HomeController::class, 'detail_galeri']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog/detail_blog', [HomeController::class, 'detail_blog']);

// Admin
// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);
// Dashboard
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/admin2', [DashboardController::class, 'index2'])->middleware('auth');
// Akun Admin
Route::get('/admin/akun', [UserController::class, 'index'])->middleware('auth');
Route::get('/admin/akun/create', [UserController::class, 'create'])->middleware('auth');
Route::post('/admin/akun/store', [UserController::class, 'store'])->middleware('auth')->name('admin.akun.store');
Route::get('/admin/akun/edit/{id}', [UserController::class, 'edit'])->middleware('auth')->name('admin.akun.edit');
Route::post('/admin/akun/update/{id}', [UserController::class, 'update'])->middleware('auth')->name('admin.akun.update');
Route::post('/admin/akun/destroy/{id}', [UserController::class, 'destroy'] )->middleware('auth')->name('admin.akun.destroy');
// Edit Halaman
Route::get('/admin/halaman', [HalamanController::class, 'index'])->middleware('auth');
// Edit Halaman Beranda
Route::get('/admin/halaman/beranda', [BerandaController::class, 'index'])->middleware('auth');
// Edit Halaman Profil
Route::get('/admin/halaman/profil', [ProfilController::class, 'index'])->middleware('auth');
// Edit Halaman Galeri
Route::get('/admin/halaman/galeri', [GaleriController::class, 'index'])->middleware('auth');
// Edit Halaman Blog
Route::get('/admin/halaman/blog', [BlogController::class, 'index'])->middleware('auth');
// Edit Footer
Route::get('/admin/halaman/footer', [FooterController::class, 'index'])->middleware('auth');






// Route::resource('slider', SliderController::class)->middleware('auth');
// Route::resource('layanan', LayananController::class)->middleware('auth');
// Route::resource('announcement', AnnouncementController::class)->middleware('auth');
Route::resource('galeriadmin', GaleriController::class)->middleware('auth');
Route::resource('profiladmin', ProfiladminController::class)->middleware('auth');
Route::resource('ibkppkadmin', IbkppkadminController::class)->middleware('auth');
Route::resource('programkegiatanadmin', ProgramkegiatanadminController::class)->middleware('auth');

Route::post('user/{id}', [UserController::class, 'update'])->middleware('auth');
