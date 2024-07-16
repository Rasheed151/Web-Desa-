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
}
