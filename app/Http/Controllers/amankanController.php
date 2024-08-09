<?php

namespace App\Http\Controllers;

use App\Models\KakSwa;
use App\Models\JadwalSwa;
use App\Models\BeritaAcara;
use App\Models\Pengumuman;
use App\Models\Rkp;
use App\Models\CatatanHasil;
use Illuminate\Http\Request;

class AmankanController extends Controller
{
    public function index()
    {
        // Menampilkan data KakSwa
        $kakSwa = KakSwa::where('userId', auth()->id())->get();
        return view('amankan.amankan', compact('kakSwa'));
    }

    public function jadwal()
    {
        // Menampilkan data JadwalSwa
        $jadwal = JadwalSwa::where('userId', auth()->id())->get();
        return view('amankan.amankan1', compact('jadwal'));
    }

    public function beritaAcara()
    {
        // Menampilkan data BeritaAcara
        $beritaAcara = BeritaAcara::where('userId', auth()->id())->get();
        return view('amankan.amankan2', compact('beritaAcara'));
    }

    public function pengumuman()
    {
        // Menampilkan data Pengumuman
        $pengumuman = Pengumuman::where('userId', auth()->id())->get();
        return view('amankan.amankan3', compact('pengumuman'));
    }

    public function rkps()
    {
        // Menampilkan data Rkp
        $rkps = Rkp::where('userId', auth()->id())->get();
        return view('amankan.amankan4', compact('rkps'));
    }

    public function catatanHasil()
    {
        // Menampilkan data CatatanHasil
        $catatanHasil = CatatanHasil::where('userId', auth()->id())->get();
        return view('amankan.amankan5', compact('catatanHasil'));
    }
}
