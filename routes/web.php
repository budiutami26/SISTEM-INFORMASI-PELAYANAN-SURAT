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
Route::get('/login',[LoginController::class, 'index'])->middleware('guest:web')->name('login'); //middleware('guest:web') berfungsi untuk mengecek apakah user sudah login atau belum
Route::post('/actionlogin',[LoginController::class, 'actionlogin'])->name("actionlogin");

Route::prefix('admin')->group(function () {

});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name("dashboard");
    Route::get('/actionlogout',[LoginController::class, 'actionlogout'])->name("actionlogout");

    //Menampilkan dan Menambah data surat permohonan observasi
    Route::get('/tambah-observasi', [SuratController::class, 'observasi'])->name("tambah_observasi");
    Route::get('update-observasi/{id}', [SuratController::class, 'edit_observasi'])->name('edit_observasi');
    Route::post('update-obserrvasi/{id}', [SuratController::class, 'update_observasi'])->name('update_observasi');
    Route::delete('hapus-obserrvasi/{id}', [SuratController::class, 'hapus_observasi'])->name('hapus_observasi');
    Route::post('/observasi', [SuratController::class, 'store'])->name("observasi");

    //Menampilkan dan Menambah data surat peminjaman perlengkapan
    Route::get('/tambah-perlengkapan', [SuratController::class, 'perlengkapan'])->name("tambah_perlengkapan");
    Route::get('update-perlengkapan/{id}', [SuratController::class, 'edit_perlengkapan'])->name('edit_perlengkapan');
    Route::post('updateperlengkapan/{id}', [SuratController::class, 'update_perlengkapan'])->name('update_perlengkapan');
    Route::delete('hapus-perlengkapan/{id}', [SuratController::class, 'hapus_perlengkapan'])->name('hapus_perlengkapan');
    Route::post('/perlengkapan', [SuratController::class, 'store_perlengkapan'])->name("perlengkapan");

    //Menampilkan dan Menambah data surat peminjaman ruangan
    Route::get('/tambah-ruangan', [SuratController::class, 'ruangan'])->name("tambah_ruangan");
    Route::get('update-ruangan/{id}', [SuratController::class, 'edit_ruangan'])->name('edit_ruangan');
    Route::post('update-ruangan/{id}', [SuratController::class, 'update_ruangan'])->name('update_ruangan');
    Route::delete('hapus-ruangan/{id}', [SuratController::class, 'hapus_ruangan'])->name('hapus_ruangan');
    Route::post('/ruangan', [SuratController::class, 'store_ruangan'])->name("ruangan");

    //Menampilkan dan Menambah data laporan proposal kegiatan
    Route::get('/tambah-proposal', [SuratController::class, 'proposal'])->name("tambah_proposal");
    Route::get('update-proposal/{id}', [SuratController::class, 'edit_proposal'])->name('edit_proposal');
    Route::post('update-proposal/{id}', [SuratController::class, 'update_proposal'])->name('update_proposal');
    Route::delete('hapus-proposal/{id}', [SuratController::class, 'hapus_proposal'])->name('hapus_proposal');
    Route::post('/proposal', [SuratController::class, 'store_proposal'])->name("proposal");

    //Menampilkan dan Menambah data surat skmk
    Route::get('/tambah-skmk', [SuratController::class, 'skmk'])->name("tambah_skmk");
    Route::get('update-skmk/{id}', [SuratController::class, 'edit_skmk'])->name('edit_skmk');
    Route::post('update-skmk/{id}', [SuratController::class, 'update_skmk'])->name('update_skmk');
    Route::delete('hapus-skmk/{id}', [SuratController::class, 'hapus_skmk'])->name('hapus_skmk');
    Route::post('/skmk', [SuratController::class, 'store_skmk'])->name("skmk");

    //Menampilkan dan Menambah data laporan lpj mahasiswa
    Route::get('/tambah-lpj', [SuratController::class, 'lpj'])->name("tambah_lpj");
    Route::get('update-lpj/{id}', [SuratController::class, 'edit_lpj'])->name('edit_lpj');
    Route::post('update-lpj/{id}', [SuratController::class, 'update_lpj'])->name('update_lpj');
    Route::delete('hapus-lpj/{id}', [SuratController::class, 'hapus_lpj'])->name('hapus_lpj');
    Route::post('/lpj', [SuratController::class, 'store_lpj'])->name("lpj");

    //Menampilkan dan Menambah data surat prestasi mahasiswa
    Route::get('/tambah-prestasi', [SuratController::class, 'prestasi'])->name("tambah_prestasi");
    Route::get('update-prestasi/{id}', [SuratController::class, 'edit_prestasi'])->name('edit_prestasi');
    Route::post('update-prestasi/{id}', [SuratController::class, 'update_prestasi'])->name('update_prestasi');
    Route::delete('hapus-prestasi/{id}', [SuratController::class, 'hapus_prestasi'])->name('hapus_prestasi');
    Route::post('/prestasi', [SuratController::class, 'store_prestasi'])->name("prestasi");

    // Untuk menampilkan tabel berdasarkan database surat
    Route::get('/status-observasi',[SuratController::class, 'status'])->name("status"); //-> observasi
    Route::get('/status-perlengkapan',[SuratController::class, 'statusperlengkapan'])->name("statusperlengkapan");
    Route::get('/status-ruangan',[SuratController::class, 'statusruangan'])->name("statusruangan");
    Route::get('/status-skmk',[SuratController::class, 'statusskmk'])->name("statusskmk");
    Route::get('/status-laporanmhs',[SuratController::class, 'statuslaporanmhs'])->name("statuslaporanmhs");
    Route::get('/status-lpj',[SuratController::class, 'statuslaporanlpj'])->name("statuslaporanlpj");
    Route::get('/status-prestasi',[SuratController::class, 'statusprestasi'])->name("statusprestasi");

});
