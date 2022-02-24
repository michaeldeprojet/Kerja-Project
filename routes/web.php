<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});

// Login //
Route::get('/login', 'App\Http\Controllers\LoginController@index');

// Dashboard Kakomli//
Route::get('/dashboardkakomli', 'App\Http\Controllers\KakomliController@kakomli');

// Dashboard Pembimbing//
Route::get('/dashboardpembimbing', 'App\Http\Controllers\PembimbingController@pembimbing');

// Dashboard Admin//
Route::get('/dashboardadmin', 'App\Http\Controllers\AdminController@admin');


// Siswa

// Dashboard Siswa//
Route::get('/dashboardsiswa', 'App\Http\Controllers\SiswaController@siswa');

// Profil Siswa
Route::get('/profil', 'App\Http\Controllers\ProfilSiswaController@index');

// Izin Ortu
Route::get('/izin', 'App\Http\Controllers\IzinOrtuController@index');

// Daftar Hadir
Route::get('/DaftarHadir', 'App\Http\Controllers\DaftarHadirController@index');

// Presensi
Route::get('/Presensi', 'App\Http\Controllers\PresensiController@index');


// Jurnal PKL
Route::get('/Jurnalpkl', 'App\Http\Controllers\JurnalPklController@index');

// Dashboard Jurnal
Route::get('/Jurnal', 'App\Http\Controllers\DashboardJurnalController@index');

// Laporan PKL
Route::get('/laporan', 'App\Http\Controllers\LaporanController@index');

// Nilai
Route::get('/nilai', 'App\Http\Controllers\NilaiController@siswa');




