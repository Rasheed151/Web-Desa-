<?php

namespace App\Http\Controllers;

use App\Models\DataAparat;
use Illuminate\Http\Request;

class DataAparatController extends Controller
{
    public function index()
    {
        $dataAparat = DataAparat::all();
        return view('dataAparat.dataAparat', compact('dataAparat'));
    }

    public function create()
    {
        return view('dataAparat.create_dataAparat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required|numeric',
            'nama_lengkap' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'ttl' => 'required|string',
            'NIK' => 'required|numeric',
            'alamat' => 'required|string',
            'npwp' => 'required|numeric',
            'noHp' => 'required|numeric',
            'jabatan' => 'required|string|max:255',
        ]);

        DataAparat::create($request->all());

        return redirect()->route('tes.index')
            ->with('success', 'Data aparat created successfully.');
    }

    public function show(DataAparat $dataAparat)
    {
        return view('dataAparat.show_dataAparat', compact('dataAparat'));
    }

    public function edit(DataAparat $dataAparat)
    {
        return view('dataAparat.edit_dataAparat', compact('dataAparat'));
    }

    public function update(Request $request, DataAparat $dataAparat)
    {
        $request->validate([
            'nomor' => 'required|numeric',
            'nama_lengkap' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'ttl' => 'required|string',
            'NIK' => 'required|numeric',
            'alamat' => 'required|string',
            'npwp' => 'required|numeric',
            'noHp' => 'required|numeric',
            'jabatan' => 'required|string|max:255',
        ]);

        $dataAparat->update($request->all());

        return redirect()->route('tes.index')
            ->with('success', 'Data aparat updated successfully.');
    }

    public function destroy(DataAparat $dataAparat)
    {
        $dataAparat->delete();

        return redirect()->route('tes.index')
            ->with('success', 'Data aparat deleted successfully.');
    }
}
