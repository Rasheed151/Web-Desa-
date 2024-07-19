<?php

namespace App\Http\Controllers;

use App\Models\DataAparat;
use Illuminate\Http\Request;

class DataAparatController extends Controller
{
    public function create()
    {
        return view('data_aparat');
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'nomor' => 'required|integer',
            'nama_lengkap' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'ttl' => 'required|string|max:255',
            'alamat' => 'required|string',
            'NIK' => 'required|integer',
            'npwp' => 'required|integer',
            'no_hp' => 'required|integer',
            'jabatan' => 'required|string|max:255',
        ]);

        DataAparat::create($validated);

        return redirect('data_aparat')->with('success', 'Data umum created successfully.');
    }

    public function index()
    {
        // Ambil semua data dari tabel data_umum
        $data_aparat = DataAparat::all();
        
        // Kirim data ke view
        return view('data_aparat', compact('data_aparat'));
    }
}
