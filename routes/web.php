<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
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
// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::resource('slider', SliderController::class)->middleware('auth');
// Route::resource('layanan', LayananController::class)->middleware('auth');
// Route::resource('announcement', AnnouncementController::class)->middleware('auth');
Route::resource('galeriadmin', GaleriController::class)->middleware('auth');
Route::resource('profiladmin', ProfiladminController::class)->middleware('auth');
Route::resource('ibkppkadmin', IbkppkadminController::class)->middleware('auth');
Route::resource('programkegiatanadmin', ProgramkegiatanadminController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');

Route::post('user/{id}', [UserController::class, 'update'])->middleware('auth');
