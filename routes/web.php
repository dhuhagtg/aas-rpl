<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PengajuanSuratFeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BPDController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PemerintahDesaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengaduanMasyarakatController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\visimisiController;
use App\Http\Controllers\WilayahController;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;




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


Route::get('/', [BerandaController::class, 'index'])->name('/');
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('pemerintahdesa', [PemerintahDesaController::class, 'index'])->name('pemerintahdesa');
Route::get('bpd', [BPDController::class, 'index'])->name('bpd');
Route::get('pengaduanmasyarakat', [PengaduanMasyarakatController::class, 'index'])->name('pengaduanmasyarakat');
Route::get('pengajuansuratfe', [PengajuanSuratFeController::class, 'index'])->name('pengajuansuratfe');
Route::get('visimisi', [visimisiController::class, 'index'])->name('visimisi');
Route::get('sejarah', [SejarahController::class, 'index'])->name('sejarah');
Route::get('wilayah', [WilayahController::class, 'index'])->name('wilayah');


require __DIR__ . '/auth.php';

/*------------------------------------------BACKEND----------------------------------------------- */

Route::get('/masuk', [AuthController::class, 'masuk'])->name('login')->middleware('guest');
Route::post('/masuk', [AuthController::class, 'login'])->middleware('guest');
Route::get('/daftar', [AuthController::class, 'daftar'])->middleware('guest');
Route::post('/daftar', [AuthController::class, 'register'])->middleware('guest');
Route::post('/keluar', [AuthController::class, 'keluar'])->name('logout');


Route::get('/dashboard', function () {
    return view('index', [
        'title'           => 'Dasbor',
        'total_laporan'   => Pengaduan::all()->count(),
        'laporan_selesai' => Pengaduan::where('status', 'selesai')->count(),
        'total_tanggapan' => Tanggapan::all()->count(),
    ]);
})->middleware('auth');

// Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
Route::put('/pengaduan/respon/{pengaduan}', [PengaduanController::class, 'response'])->middleware('auth');
Route::get('/pengaduan/belum', [PengaduanController::class, 'belum'])->middleware('auth');
Route::get('/pengaduan/proses', [PengaduanController::class, 'proses'])->middleware('auth');
Route::get('/pengaduan/selesai', [PengaduanController::class, 'selesai'])->middleware('auth');
Route::resource('/pengaduan', PengaduanController::class)->middleware('auth');
Route::resource('/tanggapan', TanggapanController::class)->middleware('auth');

Route::put('/pengajuan-surat/{pengajuan_surat}/approve', [PengajuanSuratController::class, 'approve'])->middleware('auth')->name('pengajuan_surat.approve');
Route::put('/pengajuan-surat/{pengajuan_surat}/reject', [PengajuanSuratController::class, 'reject'])->middleware('auth')->name('pengajuan_surat.reject');
Route::get('/pengajuan-surat/{pengajuan_surat}/preview', [PengajuanSuratController::class, 'preview'])->middleware('auth')->name('pengajuan_surat.preview.surat');
Route::get('/pengajuan-surat/{pengajuan_surat}/download', [PengajuanSuratController::class, 'download'])->middleware('auth')->name('pengajuan_surat.download.surat');
Route::resource('/pengajuan-surat', PengajuanSuratController::class)->middleware('auth');

Route::group(['middleware' => ['auth', 'hanyaAdmin']], function () {
    Route::get('/pengguna/masyarakat', [UserController::class, 'masyarakat']);
    Route::get('/pengguna/petugas', [UserController::class, 'petugas']);
    Route::resource('/pengguna', UserController::class);
});


Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->middleware('auth')->name('berita.destroy');
Route::resource('berita', BeritaController::class)->middleware('auth');


Route::delete('/galeri/{galeri}', [BeritaController::class, 'destroy'])->middleware('auth')->name('berita.destroy');
Route::resource('galeri', GaleriController::class)->middleware('auth');


Route::resource('pemerintah_desa', PemerintahDesaController::class)->middleware('auth');


Route::resource('bpd', BPDController::class)->middleware('auth');
