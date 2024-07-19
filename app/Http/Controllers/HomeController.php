<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $datas = DataUmum::all();
        return view('layouts',compact('datas'));
    }

    public function count()
    {
        $jumlahLaporan = DataUmum::count();
        return view('dashboard', compact('jumlahLaporan'));
    }
    public function umum(){
        return view('dataUmum');
    }
    public function aparatur(){
        return view('data_aparatur');
    }
    public function pka(){
        return view('pka');
    }
    public function tpk(){
        return view('tpk');
    }
    public function pmsk(){
        return view('pemasok');
    }
}
