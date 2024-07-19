<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DataAparatController;
use App\Http\Controllers\PkaController;
use Illuminate\Support\Facades\Route;
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
    return view('dashboard');
});

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/data-umum', [HomeController::class, 'umum']);
Route::get('/data-aparatur', [HomeController::class, 'aparatur']);
Route::get('/PKA', [HomeController::class, 'pka']);
Route::get('/tim-pelaksana', [HomeController::class, 'tpk']);
Route::get('/penyedia', [HomeController::class, 'pmsk']);

Route::get('/data_umum', [DataController::class, 'create'])->name('create');
Route::post('/data_umum', [DataController::class, 'store'])->name('store');
Route::get('/dashboard', [DataController::class, 'count']);

Route::get('/data_aparat/create', [DataAparatController::class, 'create'])->name('creatt');
Route::post('/data_aparat', [DataAparatController::class, 'simpan'])->name('simpan');

Route::post('/saveAs', [PkaController::class, 'store'])->name('save');

