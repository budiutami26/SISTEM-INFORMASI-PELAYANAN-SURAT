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

Route::get('/tambah-observasi', [SuratController::class, 'observasi'])->name("tambah_observasi");
Route::post('/observasi', [SuratController::class, 'store'])->name("observasi");


