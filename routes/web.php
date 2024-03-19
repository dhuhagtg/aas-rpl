<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BPDController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PemerintahDesaController;
use App\Http\Controllers\PengaduanMasyarakatController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\ProdukHukumController;
use App\Http\Controllers\ProfileController;
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
Route::get('berita', [BeritaController::class, 'index'])->name('berita');
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('pemerintahdesa', [PemerintahDesaController::class, 'index'])->name('pemerintahdesa');
Route::get('bpd', [BPDController::class, 'index'])->name('bpd');
Route::get('pengaduanmasyarakat', [PengaduanMasyarakatController::class, 'index'])->name('pengaduanmasyarakat');
Route::get('pengajuansurat', [PengajuanSuratController::class, 'index'])->name('pengajuansurat');
Route::get('produkhukum', [ProdukHukumController::class, 'index'])->name('produkhukum');

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
