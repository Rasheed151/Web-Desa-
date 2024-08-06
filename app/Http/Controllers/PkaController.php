<?php

namespace App\Http\Controllers;

use App\Models\Pka;
use Illuminate\Http\Request;

class PkaController extends Controller
{
    public function index()
    {
        $pka = Pka::all();
        return view('pka.pka', compact('pka'));
    }

    public function create()
    {
        return view('pka.create_pka');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required|numeric',
            'nama' => 'required|string|max:255',
            'ttl' => 'required|string|max:255',
            'NIK' => 'required|numeric',
            'jabatan' => 'required|string|max:255',
            'noHp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'npwp' => 'required|numeric',
            'noSkPka' => 'required|numeric',
            'tanggalSkPka' => 'nullable|date',
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
