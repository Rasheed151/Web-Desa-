<?php
namespace App\Http\Controllers;

use App\Models\Pka;
use App\Models\Tpk;
use App\Models\Penyedia;
use App\Models\DataUmum;
use App\Models\DataAparat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $dataUmum = DataUmum::where('userId', auth()->id())->get();
        $dataAparat = DataAparat::where('userId', auth()->id())->get();
        $pka = Pka::where('userId', auth()->id())->get();
        $dataTpk = Tpk::where('userId', auth()->id())->get();
        $penyedia = Penyedia::where('userId', auth()->id())->get();
        return view('profil', compact('dataUmum', 'dataAparat', 'pka', 'dataTpk', 'penyedia'));
    }

    public function show(DataUmum $dataUmum)
    {
        if ($dataUmum->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        return view('profil', compact('dataUmum'));
    }

    public function aparat(DataAparat $dataAparat)
    {
        if ($dataAparat->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }
        return view('profil', compact('dataAparat'));
    }

    public function aparatshow(DataAparat $dataAparat)
    {
        return view('profil', compact('dataAparat'));
    }

    public function pka(Pka $pka)
    {
        if ($pka->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }
        return view('profil', compact('pka'));
    }
    
    public function pkashow(Pka $pka)
    {
        return view('profil', compact('pka'));
    }

    public function tpk(Tpk $tpk)
    {
        if ($tpk->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }
        return view('profil', compact('dataTpk'));
    }

    public function tpkshow(Tpk $tpk)
    {
        return view('profil', compact('dataTpk'));
    }

    public function penyedia(Penyedia $penyedia)
    {
        if ($penyedia->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }
        return view('profil', compact('penyedia'));
    }

    public function penyediashow(Penyedia $penyedia)
    {
        return view('profil', compact('penyedia'));
    }
}
