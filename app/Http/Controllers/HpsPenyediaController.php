<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HpsPenyedia;

class HpsPenyediaController extends Controller
{
    public function index()
    {
        $hpsSedia = HpsPenyedia::where('userId', auth()->id())->get();
        return view('persiapanpenyedia.hps.hps', compact('hpsSedia'));
    }

    public function create()
    {
        return view('persiapanpenyedia.hps.store_hps');
    }

    public function store(Request $request)
    {
        $request->validate([
            'noKeg' => 'required|numeric' ,
            'kegiatan' => 'required|',
            'lokasi' => 'required|',
            'namaKasi' => 'required|',
            'jbtnKasi' => 'required|',
            'idHps' => 'required|numeric',
            'namaBarjas' => 'required|',
            'spesifikasi' => 'required|',
            'kode' => 'required|',
            'koefisien' => 'required|numeric', 
            'volume' => 'required|numeric',
            'satuan' => 'required|',
            'hrgSatuan' => 'required|numeric',
            'jmlhHarga' => 'required|numeric',
            'jenis' => 'required|',
        ]);

        HpsPenyedia::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('hpsSedia.index')
            ->with('success', 'Berita Acara created successfully.');
    }

    public function show($id)
    {
        $hpsSedia = HpsPenyedia::findOrFail($id);
        return view('persiapanpenyedia.hps.show_hps', compact('hpsSedia'));
    }

    public function edit(HpsPenyedia $hpsSedia)
    {
        return view('persiapanpenyedia.hps.edit_hps', compact('hpsSedia'));
    }

    public function update(Request $request, HpsPenyedia $hpsSedia)
    {
        $request->validate([
            'noKeg' => 'required|numeric' ,
            'kegiatan' => 'required|',
            'lokasi' => 'required|',
            'namaKasi' => 'required|',
            'jbtnKasi' => 'required|',
            'idHps' => 'required|',
            'namaBarjas' => 'required|',
            'spesifikasi' => 'required|',
            'kode' => 'required|',
            'koefisien' => 'required|numeric', 
            'volume' => 'required|numeric',
            'satuan' => 'required|',
            'hrgSatuan' => 'required|numeric',
            'jmlhHarga' => 'required|numeric',
            'jenis' => 'required|',
        ]);

        $hpsSedia->update($request->all());

        return redirect()->route('hpsSedia.index')
            ->with('success', 'Berita Acara updated successfully.');
    }

    public function destroy(HpsPenyedia $hpsSedia)
    {
        $hpsSedia->delete();

        return redirect()->route('hpsSedia.index')
            ->with('success', 'Berita Acara deleted successfully.');
    }
}
