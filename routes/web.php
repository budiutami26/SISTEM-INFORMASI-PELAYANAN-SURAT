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

Route::get('/daftar', function () {
    return view('daftar-status');
});

Route::get('/tes', function () {
    return view('layouts.main');
});

//fungsi untuk login tanpa registrasi
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name("dashboard");
Route::post('/actionlogin',[LoginController::class, 'actionlogin'])->name("actionlogin");
Route::get('/actionlogout',[LoginController::class, 'actionlogout'])->name("actionlogout");


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

// Untuk menampilkan tabel berdasarkan database surat
Route::get('/dashboardadmin',[SuratController::class, 'status'])->name("status"); //-> observasi
Route::get('/status-perlengkapan',[SuratController::class, 'statusperlengkapan'])->name("statusperlengkapan");
Route::get('/status-ruangan',[SuratController::class, 'statusruangan'])->name("statusruangan");
Route::get('/status-skmk',[SuratController::class, 'statusskmk'])->name("statusskmk");
Route::get('/status-laporanmhs',[SuratController::class, 'statuslaporanmhs'])->name("statuslaporanmhs");
Route::get('/status-lpj',[SuratController::class, 'statuslaporanlpj'])->name("statuslaporanlpj");
Route::get('/status-prestasi',[SuratController::class, 'statusprestasi'])->name("statusprestasi");