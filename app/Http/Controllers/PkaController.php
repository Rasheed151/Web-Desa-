<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PkaModel;

class PkaController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'nama' => 'required|string|max:255',
            'ttl' => 'required|string|max:255',
            'nik' => 'required|numeric',
            'jabatan' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
        ]);

        // Create the data
        PkaModel::create([
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'nik' => $request->input('nik'),
            'jabatan' => $request->input('jabatan'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat'),
        ]);

        // Redirect or return a response
        return redirect('pka')->with('success', 'Data created successfully!');
    }
}
