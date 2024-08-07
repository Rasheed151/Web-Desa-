<?php


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PkaController;
use App\Http\Controllers\RkpController;
use App\Http\Controllers\tesController;
use App\Http\Controllers\TpkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KakSwaController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\DataUmumController;
use App\Http\Controllers\PenyediaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DataAparatController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\BeritaAcaraController;
use App\Http\Controllers\CatatanHasilController;
use App\Http\Controllers\SuratPerintahController;
use App\Http\Controllers\JdwlLaksanaPenyediaController;
use App\Http\Controllers\KakPenyediaController;
use App\Http\Controllers\HpsPenyediaController;
use App\Http\Controllers\AhsPenyediaController;
use App\Http\Controllers\JadwalPelaksanaanSwaController;
use App\Http\Controllers\AmankanController;

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

Route::group(['middleware' => 'auth'], function () {
    // Home route
    Route::resource('home', profilController::class);

    // Route resource
    Route::resource('tes', tesController::class);
    Route::resource('profil', profilController::class);
    Route::resource('dataUmum', DataUmumController::class);
    Route::resource('dataAparat', DataAparatController::class);
    Route::resource('pka', PkaController::class);
    Route::resource('tpk', TpkController::class);
    Route::resource('penyedia', PenyediaController::class);
    Route::resource('beritaAcara', BeritaAcaraController::class);
    Route::resource('rkp', RkpController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('jadwal', JdwlLaksanaPenyediaController::class);
    Route::resource('jadwalSwa', JadwalPelaksanaanSwaController::class);
    Route::resource('kakSwa', KakSwaController::class);
    Route::resource('suratPerintah', SuratPerintahController::class);
    Route::resource('jadwal', JdwlLaksanaPenyediaController::class);
    Route::resource('CatatanHasilSwa', CatatanHasilController::class);
    Route::resource('Example', CatatanHasilController::class,);
    Route::get('/example', [AmankanController::class, 'index']);
Route::get('/example1', [AmankanController::class, 'jadwal']);
Route::get('/example2', [AmankanController::class, 'beritaAcara']);
Route::get('/example3', [AmankanController::class, 'pengumuman']);
Route::get('/example4', [AmankanController::class, 'rkps']);
Route::get('/example5', [AmankanController::class, 'catatanHasil']);
Route::resource('kakSedia', KakPenyediaController::class);
Route::resource('hpsSedia', HpsPenyediaController::class);
Route::resource('ahsSedia', AhsPenyediaController::class);

    // Static routes
    Route::get('/siapswa', function () {
        return view('siapSwa');
    });
    
    Route::get('/siapsedia', function () {
        return view('siapSedia');
    });

    Route::get('/laksanaSwa', function () {
        return view('laksanaSwa');
    });

    Route::get('/laksanaBenang', function () {
        return view('laksanabenang');
    });

    Route::get('/laksanaLelang', function () {
        return view('laksanaLelang');
    });

    Route::get('/pelateriSwa', function () {
        return view('pelateriSwa');
    });

    Route::get('/pelateriPenyedia', function () {
        return view('pelateriPenyedia');
    });
});

// Route untuk login dan logout (tanpa middleware auth)
Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');


