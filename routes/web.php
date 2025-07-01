<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardPublicController;
use App\Http\Controllers\dashboardBiodataController;
use App\Http\Controllers\dashboardPencarianController;
use App\Http\Controllers\loginEksekutifController;
use App\Http\Controllers\dashboardEksekutifController;
use App\Http\Controllers\perbandinganGenderController;
use App\Http\Controllers\populasiPerfakultasController;
use App\Http\Controllers\dataLulusController;
use App\Http\Controllers\dataProdiFakultasController;
use App\Http\Controllers\DownloadController;

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
Route::get('/login-eksekutif', [loginEksekutifController::class, 'showLoginForm'])->name('login');
Route::post('/login-eksekutif', [loginEksekutifController::class, 'login_proses'])->name('login.eksekutif');
Route::get('/downloaddataset', [DownloadController::class, 'downloadDataset'])->name('downloadDataset');
Route::get('/download/mahasiswa-aktif', [DownloadController::class, 'downloadMahasiswaAktif'])->name('download.mahasiswa.aktif');
Route::get('/dashboardpencarian', [dashboardPencarianController::class, 'dashboardPencarian'])->name('dashboardPencarian');
Route::get('/dashboardbiodata/{nim}', [dashboardBiodataController::class, 'dashboardBiodata'])->name('dashboardBiodata');


Route::middleware(['auth', 'prevent-back-history'])->group(function() {
    Route::get('/dashboard/eksekutif', [dashboardEksekutifController::class, 'eksekutif'])->name('dashboard.eksekutif');
    Route::get('data.mahasiswa.aktif', [dashboardEksekutifController::class, 'dataMahasiswaAktif'])->name('dataMahasiswaAktif');

    Route::get('/perbandingan-gender-mahasiswa', [perbandinganGenderController::class, 'index'])->name('perbandinganGenderMahasiswa');

    Route::get('/populasi-perfakultas', [populasiPerfakultasController::class, 'index'])->name('populasiPerfakultas');

    Route::get('/data-lulus', [dataLulusController::class, 'index'])->name('dataLulus');

    Route::get('/data-prodi-fakultas', [dataProdiFakultasController::class, 'index'])->name('dataProdiFakultas');
    Route::post('/logout', [loginEksekutifController::class, 'logout'])->name('logout');
});
