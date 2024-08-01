<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\BeritaAcara;

class tesController extends Controller
{
    public function index(){
        $berita = BeritaAcara::all();
        return view('awal', compact('berita'));
    }

}
