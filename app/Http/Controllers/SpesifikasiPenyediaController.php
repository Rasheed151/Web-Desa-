<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpekPenyedia;

class SpesifikasiPenyediaController extends Controller
{
    public function index()
    {
        $spekSedia = SpekPenyedia::where('userId', auth()->id())->get();
        return view('persiapanpenyedia.ahs.ahs', compact('spekSedia'));
    }

    public function create()
    {
        return view('persiapanpenyedia.ahs.store_ahs');
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

        SpekPenyedia::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('spekSedia.index')
            ->with('success', 'Berita Acara created successfully.');
    }

    public function show($id)
    {
        $spekSedia = SpekPenyedia::findOrFail($id);
        return view('persiapanpenyedia.ahs.show_ahs', compact('spekSedia'));
    }

    public function edit(SpekPenyedia $spekSedia)
    {
        return view('persiapanpenyedia.ahs.edit_ahs', compact('spekSedia'));
    }

    public function update(Request $request, SpekPenyedia $spekSedia)
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

        $spekSedia->update($request->all());

        return redirect()->route('spekSedia.index')
            ->with('success', 'Berita Acara updated successfully.');
    }

    public function destroy(SpekPenyedia $spekSedia)
    {
        $spekSedia->delete();

        return redirect()->route('spekSedia.index')
            ->with('success', 'Berita Acara deleted successfully.');
    }
}
