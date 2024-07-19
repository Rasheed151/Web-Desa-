<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function create()
    {
        return view('data_umum');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tempat_desa' => 'required|string|max:255',
            'alamat_kantor' => 'required|string',
            'npwp' => 'required|string|max:255',
            'kode_desa' => 'required|integer',
            'kepala_desa' => 'required|string|max:255',
            'no_perbub_pjb' => 'required|integer',
            'tanggal_perbub_pjb' => 'nullable|date',
            'no_keputusan_dpa' => 'required|integer',
            'tanggal_keputusan_dpa' => 'nullable|date',
            'email' => 'required|email|unique:data_umum,email',
        ]);

        DataUmum::create($validated);

        return redirect('data_umum')->with('success', 'Data umum created successfully.');
    }

    public function count()
    {
        $jumlahLaporan = DataUmum::count();
        return view('dashboard', compact('jumlahLaporan'));
    }

    public function index()
    {
        // Ambil semua data dari tabel data_umum
        $data_umum = DataUmum::all();
        
        // Kirim data ke view
        return view('data_umum', compact('data_umum'));
    }


   
}
