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
            'noAparat' => 'required|numeric',
            'namaAparat' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'ttl' => 'required|string',
            'NIK' => 'required|numeric',
            'almtAparat' => 'required|string',
            'npwp' => 'required|numeric',
            'noHp' => 'required|numeric',
            'jabatan' => 'required|string|max:255',
        ]);

        DataAparat::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('profil.index')
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
            'noAparat' => 'required|numeric',
            'namaAparat' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'ttl' => 'required|string',
            'NIK' => 'required|numeric',
            'almtAparat' => 'required|string',
            'npwp' => 'required|numeric',
            'noHp' => 'required|numeric',
            'jabatan' => 'required|string|max:255',
        ]);

        $dataAparat->update($request->all());

        return redirect()->route('profil.index')
            ->with('success', 'Data aparat updated successfully.');
    }

    public function destroy(DataAparat $dataAparat)
    {
        $dataAparat->delete();

        return redirect()->route('profil.index')
            ->with('success', 'Data aparat deleted successfully.');
    }
}
