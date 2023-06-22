<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/tes', function () {
    return view('layouts.main');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name("dashboard");
Route::post('/actionlogin',[LoginController::class, 'actionlogin'])->name("actionlogin");
Route::get('/actionlogout',[LoginController::class, 'actionlogout'])->name("actionlogout");
Route::get('/dashboardadmin',[SuratController::class, 'status'])->name("status");


//Menampilkan dan Menambah data surat permohonan observasi
Route::get('/tambah-observasi', [SuratController::class, 'observasi'])->name("tambah_observasi");
Route::post('/observasi', [SuratController::class, 'store'])->name("observasi");

//Menampilkan dan Menambah data surat peminjaman perlengkapan
Route::get('/tambah-perlengkapan', [SuratController::class, 'perlengkapan'])->name("tambah_perlengkapan");
Route::post('/perlengkapan', [SuratController::class, 'store_perlengkapan'])->name("perlengkapan");

//Menampilkan dan Menambah data surat peminjaman ruangan
Route::get('/tambah-ruangan', [SuratController::class, 'ruangan'])->name("tambah_ruangan");
Route::post('/ruangan', [SuratController::class, 'store_ruangan'])->name("ruangan");

//Menampilkan dan Menambah data laporan proposal kegiatan
Route::get('/tambah-proposal', [SuratController::class, 'proposal'])->name("tambah_proposal");
Route::post('/proposal', [SuratController::class, 'store_proposal'])->name("proposal");

//Menampilkan dan Menambah data surat skmk
Route::get('/tambah-skmk', [SuratController::class, 'skmk'])->name("tambah_skmk");
Route::post('/skmk', [SuratController::class, 'store_skmk'])->name("skmk");

//Menampilkan dan Menambah data laporan lpj mahasiswa
Route::get('/tambah-lpj', [SuratController::class, 'lpj'])->name("tambah_lpj");
Route::post('/lpj', [SuratController::class, 'store_lpj'])->name("lpj");

//Menampilkan dan Menambah data surat prestasi mahasiswa
Route::get('/tambah-prestasi', [SuratController::class, 'prestasi'])->name("tambah_prestasi");
Route::post('/prestasi', [SuratController::class, 'store_prestasi'])->name("prestasi");