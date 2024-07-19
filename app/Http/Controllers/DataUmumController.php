<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
use Illuminate\Http\Request;

class DataUmumController extends Controller
{
    public function create()
    {
        return view('dataUmum');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tempatDesa' => 'required|string|max:255',
            'alamatKantor' => 'required|string',
            'npwp' => 'required|string|max:255',
            'kodeDesa' => 'required|integer',
            'kepalaDesa' => 'required|string|max:255',
            'noPerbubPjb' => 'required|integer',
            'tanggalPerbubPjb' => 'nullable|date',
            'noKeputusanDpa' => 'required|integer',
            'tanggalKeputusanDpa' => 'nullable|date',
            'email' => 'required|email|unique:dataUmum,email',
        ]);

        DataUmum::create($validated);

        return redirect('dataUmum')->with('success', 'Data umum created successfully.');
    }

    public function count()
    {
        $jumlahLaporan = DataUmum::count();
        return view('dashboard', compact('jumlahLaporan'));
    }

    public function index()
    {
        // Ambil semua data dari tabel data_umum
        $dataUmum = DataUmum::all();
        
        // Kirim data ke view
        return view('dataUmum', compact('dataUmum'));
    }

}
