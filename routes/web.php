<?php

use App\Http\Controllers\PDFController;
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
    return view('login.index');
});

// Login //
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');


Route::group(['middleware' => ['auth']], function(){

    // Surat permohonan 1//
    Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
    Route::get('generate-surat-pkl-kelompok', [PDFController::class, 'generatesuratkel']);

    // Pdf Penilaian //
    Route::get('generate-nilai-pkl', [PDFController::class, 'generatenilaipkl']);


    Route::group(['middleware' => ['role:KAKOMLI']], function(){
    // Halaman Kakomli //
        // Dashboard Kakomli//
        Route::get('/dashboardkakomli', 'App\Http\Controllers\KakomliController@kakomli');

        // Profiel Kakomli //
        Route::get('/profilekakomli', 'App\Http\Controllers\KakomliController@profile');

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

        // Tambah Sertifikat PKL Kakomli //
        Route::get('/tambahsertifikat', 'App\Http\Controllers\KakomliController@tambahsertifikat');
    // Akhir Halaman Kakomli //
    });

    Route::group(['middleware' => ['role:ADMIN']], function(){
    // Halaman Admin //
        // Dashboard Admin //
        Route::get('/dashboardadmin', 'App\Http\Controllers\AdminController@admin');

        // Data Siswa //
        Route::get('/datasiswa', 'App\Http\Controllers\AdminController@datasiswa');

        // Input Siswa //
        Route::get('/inputsiswa', 'App\Http\Controllers\AdminController@inputsiswa');

        // Profile Admin //
        Route::get('/profileadmin', 'App\Http\Controllers\AdminController@profile');

        // Surat Pengantar Admin //
        Route::get('/suratpengantaradmin', 'App\Http\Controllers\AdminController@suratpengantar');

        // Surat Permohonan Admin //
        Route::get('/suratpermohonanadmin', 'App\Http\Controllers\AdminController@suratpermohonan');

        // Surat Permohonan Peserta //
        Route::get('/suratpermohonanpeserta', 'App\Http\Controllers\AdminController@suratpermohonanpeserta');

        // Surat Permohonan kelompok //
        Route::get('/suratpermohonankelompok', 'App\Http\Controllers\AdminController@suratpermohonankelompok');

        // Rekap Data Siswa //
        Route::get('/rekapdatasiswa', 'App\Http\Controllers\AdminController@rekapdatasiswa');

        // Rekap Daftar Nilai //
        Route::get('/rekapdaftarnilai', 'App\Http\Controllers\AdminController@rekapdaftarnilai');

        // Rekap Hasil Laporan //
        Route::get('/rekaphasillaporan', 'App\Http\Controllers\AdminController@rekaphasillaporan');
    // Akhir Halaman Admin //
    });

    Route::group(['middleware' => ['role:PEMBIMBING']], function(){
        // Dashboard Pembimbing//
        Route::get('/dashboardpembimbing', 'App\Http\Controllers\PembimbingController@pembimbing');

        // Profile Pembimbing//
        Route::get('/profilepembimbing', 'App\Http\Controllers\PembimbingController@profile');

        // Kompetensi keahlian Pembimbing//
        Route::get('/kompetensikeahlianpem', 'App\Http\Controllers\PembimbingController@kompetensi');

        // Daftar Siswa Pembimbing//
        Route::get('/daftarsiswapem', 'App\Http\Controllers\PembimbingController@siswa');

        // Presensi Siswa Pembimbing//
        Route::get('/hadirsiswapem', 'App\Http\Controllers\PembimbingController@presensi');

        // Iinput Nilai PKL Pembimbing //
        Route::get('/inputpenilaian', 'App\Http\Controllers\PembimbingController@nilai');

        // Input Nilai PKL Pembimbing //
        Route::get('/tambahpenilaian', 'App\Http\Controllers\PembimbingController@tambahpenilaian');

        // Rekap Laporan PKL Pembimbing //
        Route::get('/rekaplaporanpem', 'App\Http\Controllers\PembimbingController@laporan');
    });

    Route::group(['middleware' => ['role:SISWA']], function(){
        // Dashboard Siswa//
        Route::get('/dashboardsiswa', 'App\Http\Controllers\SiswaController@siswa');

        // Profile Siswa //
        Route::get('/profilesiswa', 'App\Http\Controllers\SiswaController@profile');

        // Izin Ortu
        Route::get('/izinsiswa', 'App\Http\Controllers\SiswaController@izin');

        // Daftar Hadir
        Route::get('/DaftarHadirsiswa', 'App\Http\Controllers\SiswaController@daftarkehadiran');

        // Presensi
        Route::get('/Presensisiswa', 'App\Http\Controllers\SiswaController@presensi');

        // Jurnal PKL
        Route::get('/Jurnalpklsiswa', 'App\Http\Controllers\SiswaController@jurnalpkl');

        // Dashboard Jurnal
        Route::get('/Jurnalsiswa', 'App\Http\Controllers\SiswaController@jurnal');

        // Laporan PKL
        Route::get('/laporansiswa', 'App\Http\Controllers\SiswaController@lapor');

        // Nilai
        Route::get('/nilaisiswa', 'App\Http\Controllers\SiswaController@nilai');
    });


});
