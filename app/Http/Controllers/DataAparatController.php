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
            'NIK' => 'required|digits:16', // Assuming NIK is 16 digits
            'alamat' => 'required|string',
            'npwp' => 'required|digits:15', // Assuming NPWP is 15 digits
            'no_hp' => 'required|digits_between:10,15', // Assuming phone number is between 10 and 15 digits
            'jabatan' => 'required|string|max:255',
        ]);

        DataAparat::create($validated);

        return redirect('data_aparat')->with('success', 'Data umum created successfully.');
    }

}
