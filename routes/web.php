<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\ProfilController;
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

// Akun Admin
Route::get('/admin/akun', [UserController::class, 'index'])->middleware('auth');
Route::get('/admin/akun/create', [UserController::class, 'create'])->middleware('auth');
Route::post('/admin/akun/store', [UserController::class, 'store'])->middleware('auth')->name('admin.akun.store');
Route::get('/admin/akun/edit/{id}', [UserController::class, 'edit'])->middleware('auth')->name('admin.akun.edit');
Route::post('/admin/akun/update/{id}', [UserController::class, 'update'])->middleware('auth')->name('admin.akun.update');
Route::post('/admin/akun/destroy/{id}', [UserController::class, 'destroy'])->middleware('auth')->name('admin.akun.destroy');

// Edit Halaman
Route::get('/admin/halaman', [HalamanController::class, 'index'])->middleware('auth');

// Edit Halaman Beranda
Route::get('/admin/halaman/beranda', [BerandaController::class, 'index'])->middleware('auth')->name('admin.halaman.beranda');
Route::post('/admin/halaman/beranda/update/{id}', [BerandaController::class, 'update'])->middleware('auth')->name('admin.halaman.beranda.update');
Route::get('/admin/halaman/beranda/tambah_mitra', [BerandaController::class, 'tambah_mitra'])->middleware('auth')->name('admin.halaman.beranda.tambah_mitra');
Route::post('/admin/halaman/beranda/store_mitra', [BerandaController::class, 'store'])->middleware('auth')->name('admin.halaman.beranda.store_mitra');
Route::get('/admin/halaman/beranda/edit_mitra/{id}', [BerandaController::class, 'edit_mitra'])->middleware('auth')->name('admin.halaman.beranda.edit_mitra');
Route::post('/admin/halaman/beranda/update_mitra/{id}', [BerandaController::class, 'update_mitra'])->middleware('auth')->name('admin.halaman.beranda.update_mitra');
Route::get('/admin/halaman/beranda/delete_mitra/{id}', [BerandaController::class, 'destroy'])->middleware('auth')->name('admin.halaman.beranda.delete_mitra');

// Edit Halaman Profil
Route::get('/admin/halaman/profil', [ProfilController::class, 'index'])->middleware('auth')->name('admin.halaman.profil');
Route::post('/admin/halaman/profil/update/{id}', [ProfilController::class, 'update'])->middleware('auth')->name('admin.halaman.profil.update');

// Edit Halaman Galeri
Route::get('/admin/halaman/galeri', [GaleriController::class, 'index'])->middleware('auth');
Route::get('/admin/halaman/galeri/tambah_produk', [GaleriController::class, 'tambah_produk'])->middleware('auth');
Route::get('/admin/halaman/galeri/edit_produk', [GaleriController::class, 'edit_produk'])->middleware('auth');
Route::get('/admin/halaman/galeri/edit_produk/tambah_foto', [GaleriController::class, 'tambah_foto_produk'])->middleware('auth');
Route::get('/admin/halaman/galeri/edit_produk/edit_foto', [GaleriController::class, 'edit_foto_produk'])->middleware('auth');
Route::get('/admin/halaman/galeri/edit_produk/tambah_sosmed', [GaleriController::class, 'tambah_sosmed_produk'])->middleware('auth');
Route::get('/admin/halaman/galeri/edit_produk/edit_sosmed', [GaleriController::class, 'edit_sosmed_produk'])->middleware('auth');

// Edit Halaman Blog
Route::get('/admin/halaman/blog', [BlogController::class, 'index'])->middleware('auth');
Route::get('/admin/halaman/blog/tambah_blog', [BlogController::class, 'tambah_blog'])->middleware('auth');
Route::get('/admin/halaman/blog/edit_blog', [BlogController::class, 'edit_blog'])->middleware('auth');
Route::get('/admin/halaman/blog/edit_blog/tambah_foto', [BlogController::class, 'tambah_foto_blog'])->middleware('auth');
Route::get('/admin/halaman/blog/edit_blog/edit_foto', [BlogController::class, 'edit_foto_blog'])->middleware('auth');

// Edit Footer
Route::get('/admin/halaman/footer', [FooterController::class, 'index'])->middleware('auth');
