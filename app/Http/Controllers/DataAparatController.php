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
            'nama_lengkap' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'ttl' => 'required|string|max:255',
            'kepala_desa' => 'required|integer',
            'alamat' => 'required|string',
            'npwp' => 'required|integer',
            'no_hp' => 'required|integer',
            'jabatan' => 'required|string|max:255',
        ]);

        DataAparat::create($validated);

        return redirect('data_aparat')->with('success', 'Data umum created successfully.');
    }
}
