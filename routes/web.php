<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PkaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataUmumController;
use App\Http\Controllers\DataAparatController;
use App\Http\Controllers\TpkController;
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
    return view('siapSwa');
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



