<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PkaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataUmumController;
use App\Http\Controllers\DataAparatController;
use App\Http\Controllers\TpkController;
use App\Http\Controllers\PenyediaController;
use App\Http\Controllers\BeritaAcaraController;
use App\Http\Controllers\RkpController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/dataUmum', [HomeController::class, 'umum']);
Route::get('/data-aparatur', [HomeController::class, 'aparatur']);
Route::get('/PKA', [HomeController::class, 'pka']);
Route::get('/tim-pelaksana', [HomeController::class, 'tpk']);
Route::get('/penyedia', [HomeController::class, 'pmsk']);
Route::get('/siapSwa', [HomeController::class, 'siapSwa']);
Route::get('/dashboard', [DataUmumController::class, 'count']);

Route::resource('dataUmum', DataUmumController::class);

Route::resource('dataAparat', DataAparatController::class);

Route::resource('pka', PkaController::class);

Route::resource('tpk', TpkController::class);

Route::resource('penyedia', PenyediaController::class);

Route::resource('beritaAcara', BeritaAcaraController::class);

Route::resource('rkp', RkpController::class);

Route::resource('pengumuman', PengumumanController::class);

Route::get('/siapswa', function () {
    return view('siapSwa');
});

Route::get('/siapsedia', function () {
    return view('siapSedia');
});

Route::get('/laksanaSwa', function () {
    return view('laksanaSwa');
});


Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});