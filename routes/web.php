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

// Dashboard Pembimbing//
Route::get('/dashboardpembimbing', 'App\Http\Controllers\PembimbingController@pembimbing');

// Dashboard Admin//
Route::get('/dashboardadmin', 'App\Http\Controllers\AdminController@admin');



