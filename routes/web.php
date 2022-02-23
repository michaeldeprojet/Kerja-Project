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

// Dashboard Siswa//
Route::get('/dashboardsiswa', 'App\Http\Controllers\SiswaController@siswa');

// Dashboard Kakomli//
Route::get('/dashboardkakomli', 'App\Http\Controllers\KakomliController@kakomli');

// Profiel Kakomli //
Route::get('/profielkakomli', 'App\Http\Controllers\KakomliController@profiel');

// Kompetensi Keahlian kakomli//
Route::get('/kompetensikeahliankakomli', 'App\Http\Controllers\KakomliController@kompetensi');

// Surat Permohonan Kakomli //
Route::get('/suratpermohonankakomli', 'App\Http\Controllers\KakomliController@surat');

// Penentuan PKL kakomli //
Route::get('/penentuanpklkakomli', 'App\Http\Controllers\KakomliController@penentuan');

// Tambah Penentuan PKL Kakomli //
Route::get('/tambahpenentuan', 'App\Http\Controllers\KakomliController@tambahpenentuan');

// Rekap Nilai PKL Kakomli //
Route::get('/rekapnilaikakomli', 'App\Http\Controllers\KakomliController@nilai');

// Rekap Laporan PKL Kakomli //
Route::get('/rekaplaporankakomli', 'App\Http\Controllers\KakomliController@laporan');

// Cetak Sertifikat PKL //
Route::get('/cetaksertfikatkakomli', 'App\Http\Controllers\KakomliController@sertifikat');

// Dashboard Pembimbing//
Route::get('/dashboardpembimbing', 'App\Http\Controllers\PembimbingController@pembimbing');

// Dashboard Admin//
Route::get('/dashboardadmin', 'App\Http\Controllers\AdminController@admin');



