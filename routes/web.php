<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\PendaftaranController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('admin-dashboard',[
        "title" => "Dashboard"
    ]);
});

Route::get('/pendaftaran', function () {
    return view('admin-pendaftaran');
});

Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::get('/infaq', [InfaqController::class, 'index']);
Route::get('/prestasi', [PrestasiController::class, 'index']);
Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);

