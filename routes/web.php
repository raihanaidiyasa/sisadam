<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardPublicController;
use App\Http\Controllers\dashboardBiodataController;
use App\Http\Controllers\dashboardPencarianController;
use App\Http\Controllers\loginEksekutifController;
use App\Http\Controllers\dashboardEksekutifController;

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

Route::get('/', [dashboardPublicController::class, 'dashboardPublic'])->name('dashboardPublic');

Route::get('/data-mahasiswa-aktif', [dashboardPublicController::class, 'dataMahasiswaAktif'])->name('data.mahasiswa.aktif');

Route::get('/dashboardpencarian', [dashboardPencarianController::class, 'dashboardPencarian'])->name('dashboardPencarian');

Route::get('/dashboardbiodata', [dashboardBiodataController::class, 'dashboardBiodata'])->name('dashboardBiodata');

// GET route - Show login form
Route::get('/login-eksekutif', [loginEksekutifController::class, 'showLoginForm'])->name('login.eksekutif.form');

// POST route - Process login form
Route::post('/login-eksekutif', [loginEksekutifController::class, 'login'])->name('login.eksekutif');

Route::get('/dashboard/eksekutif', [dashboardEksekutifController::class, 'eksekutif'])->name('dashboard.eksekutif');
