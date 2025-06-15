<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardPublicController;
use App\Http\Controllers\dashboardBiodataController;
use App\Http\Controllers\dashboardPencarianController;
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

Route::get('/dashboardpencarian', [dashboardPencarianController::class, 'dashboardPencarian'])->name('dashboardPencarian');

Route::get('/dashboardbiodata', [dashboardBiodataController::class, 'dashboardBiodata'])->name('dashboardBiodata');
