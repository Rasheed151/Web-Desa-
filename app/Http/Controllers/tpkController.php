<?php

namespace App\Http\Controllers;

use App\Models\Tpk;
use Illuminate\Http\Request;

class TpkController extends Controller
{
    public function index()
    {
        $dataTpk = Tpk::all();
        return view('tpk.tpk', compact('dataTpk'));
    }

    public function create()
    {
        return view('tpk.create_tpk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'NIK' => 'required|numeric',
            'noHp' => 'required|numeric',
            'noSkTpk' => 'required|numeric',
            'tanggalSkTpk' => 'nullable|date',
            'jabatan' => 'required',
        ]);

        Tpk::create($request->all());
        return redirect()->route('tpk.index')
                        ->with('success', 'Data TPK created successfully.');
    }

    public function show(Tpk $tpk)
    {
        return view('tpk.show_tpk', compact('tpk'));
    }

    public function edit(Tpk $tpk)
    {
        return view('tpk.edit_tpk', compact('tpk'));
    }

    public function update(Request $request, Tpk $tpk)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'NIK' => 'required|numeric',
            'noHp' => 'required|numeric',
            'noSkTpk' => 'required|numeric',
            'tanggalSkTpk' => 'nullable|date',
            'jabatan' => 'required',
        ]);

        $tpk->update($request->all());
        return redirect()->route('tpk.index')
                        ->with('success', 'Data TPK updated successfully.');
    }

    public function destroy(Tpk $tpk)
    {
        $tpk->delete();
        return redirect()->route('tpk.index')
                        ->with('success', 'Data TPK deleted successfully.');
    }
}
