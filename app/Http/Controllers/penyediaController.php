<?php

namespace App\Http\Controllers;

use App\Models\Penyedia;
use Illuminate\Http\Request;

class PenyediaController extends Controller
{
    public function index()
    {
        $penyedia = Penyedia::all();
        return view('penyedia.penyedia', compact('penyedia'));
    }

    public function create()
    {
        return view('penyedia.create_penyedia');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'ttl' => 'required',
            'NIK' => 'required|numeric',
            'alamat_rumah' => 'required',
            'nama_toko' => 'required',
            'alamat_toko' => 'required',
            'npwp' => 'required|numeric',
            'nib' => 'required|numeric',
        ]);

        Penyedia::create($request->all());
        return redirect()->route('penyedia.index')
                         ->with('success', 'Data Penyedia created successfully.');
    }

    public function show($id)
    {
        $penyedia = Penyedia::findOrFail($id);
        return view('penyedia.show_penyedia', compact('penyedia'));
    }

    public function edit($id)
    {
        $penyedia = Penyedia::findOrFail($id);
        return view('penyedia.edit_penyedia', compact('penyedia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'ttl' => 'required',
            'NIK' => 'required|numeric',
            'alamat_rumah' => 'required',
            'nama_toko' => 'required',
            'alamat_toko' => 'required',
            'npwp' => 'required|numeric',
            'nib' => 'required|numeric',
        ]);

        $penyedia = Penyedia::findOrFail($id);
        $penyedia->update($request->all());
        return redirect()->route('penyedia.index')
                         ->with('success', 'Data Penyedia updated successfully.');
    }

    public function destroy($id)
    {
        $penyedia = Penyedia::findOrFail($id);
        $penyedia->delete();
        return redirect()->route('penyedia.index')
                         ->with('success', 'Data Penyedia deleted successfully.');
    }
}
