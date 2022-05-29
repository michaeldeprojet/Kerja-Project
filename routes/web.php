<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DataPembimbingController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DataAkunSiswaController;
use App\Http\Controllers\DataAkunPembimbingController;

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
    Route::post('generate-pdf', [PDFController::class, 'generatePDF']);
    Route::get('generate-surat-pkl-kelompok', [PDFController::class, 'generatesuratkel']);

    // Pdf Penilaian //
    Route::get('generate-nilai-pkl', [PDFController::class, 'generatenilaipkl']);


    Route::group(['middleware' => ['role:KAKOMLI']], function(){

        //get datasisswa
        Route::get('/nama/{id}', 'App\Http\Controllers\KakomliController@getData');
        Route::get('/sertifikat/{id}', 'App\Http\Controllers\KakomliController@getDataSertifikat');

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
        Route::post('/tambahpenentuan/store', 'App\Http\Controllers\KakomliController@storepenentuan');
        Route::get('/penentuan/delete/{id}', 'App\Http\Controllers\KakomliController@destroypenentuan');

        // Rekap Nilai PKL Kakomli //
        Route::get('/rekapnilaikakomli', 'App\Http\Controllers\KakomliController@nilai');

        // Rekap Laporan PKL Kakomli //
        Route::get('/rekaplaporankakomli', 'App\Http\Controllers\KakomliController@laporan');

        // Cetak Sertifikat PKL //
        Route::get('/cetaksertifikatkakomli', 'App\Http\Controllers\KakomliController@sertifikat');

        // Tambah Sertifikat PKL Kakomli //
        Route::get('/tambahsertifikat', 'App\Http\Controllers\KakomliController@tambahsertifikat');
        Route::post('/tambahsertifikat/store', 'App\Http\Controllers\KakomliController@storesertifikat');
        Route::get('/tambahsertifikat/delete/{id}', 'App\Http\Controllers\KakomliController@destroysertifikat');
    // Akhir Halaman Kakomli //
    });

    Route::group(['middleware' => ['role:ADMIN']], function(){
    // Halaman Admin //

        //get datasisswa
        Route::get('/siswa/{id}', 'App\Http\Controllers\AdminController@getData');
        Route::get('/pembimbing/{id}', 'App\Http\Controllers\AdminController@getDataPembimbing');

        //Download file
        Route::get('/file-download', [DataSiswaController::class, 'downloadFile'])->name('file.download.index');
        Route::get('/download-file', [DataPembimbingController::class, 'downloadFile'])->name('file.index');


        // Dashboard Admin //
        Route::get('/dashboardadmin', 'App\Http\Controllers\AdminController@admin');

        // Data Siswa //
        Route::resource('/datasiswa', DataSiswaController::class);
        Route::resource('/datapembimbing', DataPembimbingController::class);

        // Data Akun //
        Route::resource('/dataakunsiswa', DataAkunSiswaController::class);
        Route::resource('/dataakunpembimbing', DataAkunPembimbingController::class);
        Route::get('/hash', 'App\Http\Controllers\DataAkunSiswaController@hash');
        // Route::resource('/datapembimbing', DataPembimbingController::class);

        // Input Siswa //
        Route::get('/inputsiswa', 'App\Http\Controllers\AdminController@inputsiswa');
        Route::get('/inputpembimbing', 'App\Http\Controllers\AdminController@inputpembimbing');

        // Input Siswa //
        Route::post('/importsiswa', 'App\Http\Controllers\DataSiswaController@importsiswa');
        Route::post('/importpembimbing', 'App\Http\Controllers\DataPembimbingController@importpembimbing');

        // Profile Admin //
        Route::get('/profileadmin', 'App\Http\Controllers\AdminController@profile');

        // Surat Pengantar Admin //
        Route::get('/suratpengantaradmin', 'App\Http\Controllers\AdminController@suratpengantar');


        // Surat Permohonan Admin //
        Route::get('/suratpermohonanadmin', 'App\Http\Controllers\AdminController@suratpermohonan');
        Route::get('/suratpermohonanadmin/delete/{id}', 'App\Http\Controllers\AdminController@delete');
        Route::post('/suratpermohonanadmin', 'App\Http\Controllers\AdminController@GetDataSurat');
        
        // Surat Permohonan Peserta //
        Route::get('/suratpermohonanpeserta', 'App\Http\Controllers\AdminController@suratpermohonanpeserta');
        Route::post('/simpanPermohonanPeserta', 'App\Http\Controllers\AdminController@simpanPermohonanPeserta');

        // Surat Permohonan kelompok //
        Route::get('/suratpermohonankelompok', 'App\Http\Controllers\AdminController@suratpermohonankelompok');
        Route::post('/simpanpermohonankelompok', 'App\Http\Controllers\AdminController@simpanpermohonankelompok')->name('simpan-kelompok');
        Route::post('/importdatasiswa', 'App\Http\Controllers\AdminController@importdatasiswa');


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

        //get data siswa
        Route::get('/datasiswas/{id}', 'App\Http\Controllers\SiswaController@getData');
        // Dashboard Siswa//
        Route::get('/dashboardsiswa', 'App\Http\Controllers\SiswaController@siswa');

        // Profile Siswa //
        Route::get('/profilesiswa/{id}', 'App\Http\Controllers\SiswaController@profile');

        // Izin Ortu
        Route::get('/izinsiswa', 'App\Http\Controllers\SiswaController@izin');

        // Daftar Hadir
        Route::resource('/presensi', PresensiController::class);

        // Jurnal PKL
        Route::resource('/Jurnalpkl', JurnalController::class);

        // Laporan PKL
        Route::resource('/laporansiswa', SiswaController::class);

        // Nilai
        Route::get('/nilaisiswa', 'App\Http\Controllers\SiswaController@nilai');
    });


});
