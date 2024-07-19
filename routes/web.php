<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataAparatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataUmumController;
use App\Models\DataUmum;

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
Route::get('/dataUmum', [HomeController::class, 'umum']);
Route::get('/data-aparatur', [HomeController::class, 'aparatur']);
Route::get('/PKA', [HomeController::class, 'pka']);
Route::get('/tim-pelaksana', [HomeController::class, 'tpk']);
Route::get('/penyedia', [HomeController::class, 'pmsk']);


Route::get('/dataUmum', [DataUmumController::class, 'create'])->name('create');
Route::post('/dataUmum', [DataUmumController::class, 'store'])->name('store');
Route::get('/dataUmum', [DataUmumController::class, 'index'])->name('dataUmum.index');
Route::get('/dashboard', [DataUmumController::class, 'count']);

Route::get('/data_aparat', [DataAparatController::class, 'create'])->name('create');
Route::post('/data_aparat', [DataAparatController::class, 'simpan'])->name('simpan');
Route::get('/data_aparat', [DataAparatController::class, 'index'])->name('data_aparat.index');

