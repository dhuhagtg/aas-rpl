<?php

use App\Http\Controllers\Front\BeritaController;
use App\Http\Controllers\Front\BPDController;
use App\Http\Controllers\Front\GaleriController;
use App\Http\Controllers\Front\PemerintahDesaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/daftar-pemerintah-desa', [PemerintahDesaController::class, 'list']);
Route::get('/daftar-bpd-desa', [BPDController::class, 'list']);
Route::get('/daftar-galeri-desa', [GaleriController::class, 'list']);
Route::get('/daftar-berita-desa', [BeritaController::class, 'list']);
Route::get('/berita-desa/{slug}', [BeritaController::class, 'detail']);
Route::get('/galeri-desa/{slug}', [GaleriController::class, 'detail']);