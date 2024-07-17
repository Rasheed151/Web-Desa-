<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataAparatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataUmumController;
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


Route::get('/data_umum', [DataUmumController::class, 'create'])->name('create');
Route::post('/data_umum', [DataUmumController::class, 'store'])->name('store');
Route::get('/dashboard', [DataUmumController::class, 'count']);

Route::get('/data_aparat/create', [DataAparatController::class, 'create'])->name('creatt');
Route::post('/data_aparat', [DataAparatController::class, 'simpan'])->name('simpan');

