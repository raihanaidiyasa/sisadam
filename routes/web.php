<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardPublicController;
use App\Http\Controllers\dashboardBiodataController;
use App\Http\Controllers\dashboardPencarianController;
use App\Http\Controllers\loginEksekutifController;
use App\Http\Controllers\dashboardEksekutifController;
use App\Http\Controllers\perbandinganGenderController;
use App\Http\Controllers\populasiPerfakultasController;

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

Route::get('/downloaddataset', [dashboardPublicController::class, 'downloadDataset'])->name('downloadDataset');

Route::get('/dashboardpencarian', [dashboardPencarianController::class, 'dashboardPencarian'])->name('dashboardPencarian');

Route::get('/dashboardbiodata', [dashboardBiodataController::class, 'dashboardBiodata'])->name('dashboardBiodata');

// GET route - Show login form
Route::get('/login-eksekutif', [loginEksekutifController::class, 'showLoginForm'])->name('login.eksekutif.form');

// POST route - Process login form
Route::post('/login-eksekutif', [loginEksekutifController::class, 'login'])->name('login.eksekutif');

Route::get('/dashboard/eksekutif', [dashboardEksekutifController::class, 'eksekutif'])->name('dashboard.eksekutif');

Route::get('data.mahasiswa.aktif', [dashboardEksekutifController::class, 'dataMahasiswaAktif'])->name('dataMahasiswaAktif');

Route::get('/perbandingan-gender-mahasiswa', [perbandinganGenderController::class, 'index'])->name('perbandinganGenderMahasiswa');

Route::get('/populasi-perfakultas', [populasiPerfakultasController::class, 'index'])->name('populasiPerfakultas');