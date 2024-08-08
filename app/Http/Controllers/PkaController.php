<?php

namespace App\Http\Controllers;

use App\Models\Pka;
use App\Models\DataAparat;
use Illuminate\Http\Request;

class PkaController extends Controller
{
    public function index()
    {
        $pka = Pka::with('aparat')->get();
        
        return view('pka.pka', compact('pka'));
    }

    public function create()
    {
        $dataAparat = DataAparat::all(); // Fetch all data from DataAparat
        return view('pka.pka', compact('dataAparat'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'noPka' => 'required|integer',
            'noSkPka' => 'required|integer',
            'tngglSkPka' => 'required|date',
            'aparat_id' => 'required|exists:data_aparat,id',
        ]);

        Pka::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('profil.index')
            ->with('success', 'Data PKA berhasil ditambahkan');
    }

    public function show(Pka $pka)
    {
        return view('pka.show_pka', compact('pka'));
    }

    public function edit(Pka $pka)
    {
        return view('pka.edit_pka', compact('pka'));
    }

    public function update(Request $request, Pka $pka)
    {
        $validatedData = $request->validate([
            'nomor' => 'required',
            'nama' => 'required',
            'ttl' => 'required',
            'NIK' => 'required',
            'jabatan' => 'required',
            'noHp' => 'required',
            'alamat' => 'required',
            'npwp' => 'required',
            'noSkPka' => 'required',
            'tanggalSkPka' => 'nullable|date',
        ]);

        $pka->update($validatedData);

        return redirect()->route('profil.index')->with('success', 'Data PKA berhasil diperbarui');
    }

    public function destroy(Pka $pka)
    {
        $pka->delete();

        return redirect()->route('profil.index')->with('success', 'Data PKA berhasil dihapus');
    }
}
