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
    public function index()
    {
        $dataUmum = DataUmum::all();
        $dataAparat = DataAparat::all();
        return view('profil', compact('dataUmum', 'dataAparat'));
    }

    public function show(DataUmum $dataUmum)
    {
        return view('profil', compact('dataUmum'));
    }

    public function aparat()
    {
        $dataAparat = DataAparat::all();
        return view('profil', compact('dataAparat'));
    }

    public function aparatshow(DataAparat $dataAparat)
    {
        return view('profil', compact('dataAparat'));
    }

    public function pka()
    {
        $pka = Pka::all();
        return view('profil', compact('pka'));
    }
    
    public function pkashow(Pka $pka)
    {
        return view('profil', compact('pka'));
    }


    public function tpk()
    {
        $dataTpk = Tpk::all();
        return view('profil', compact('dataTpk'));
    }
    public function tpkshow(Tpk $dataAparat)
    {
        return view('profil', compact('dataTpk'));
    }



    public function penyedia()
    {
        $penyedia = Penyedia::all();
        return view('profil', compact('penyedia'));
    }
    public function penyediashow(Penyedia $dataAparat)
    {
        return view('profil', compact('penyedia'));
    }
}
