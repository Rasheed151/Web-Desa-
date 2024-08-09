<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AhsPenyedia;

class AhsPenyediaController extends Controller
{
    public function index()
    {
        $ahsSedia = AhsPenyedia::where('userId', auth()->id())->get();
        return view('persiapanpenyedia.ahs.ahs', compact('ahsSedia'));
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

        AhsPenyedia::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('ahsSedia.index')
            ->with('success', 'Berita Acara created successfully.');
    }

    public function show($id)
    {
        $ahsSedia = AhsPenyedia::findOrFail($id);
        return view('persiapanpenyedia.ahs.show_ahs', compact('ahsSedia'));
    }

    public function edit(AhsPenyedia $ahsSedia)
    {
        return view('persiapanpenyedia.ahs.edit_ahs', compact('ahsSedia'));
    }

    public function update(Request $request, AhsPenyedia $ahsSedia)
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

        $ahsSedia->update($request->all());

        return redirect()->route('ahsSedia.index')
            ->with('success', 'Berita Acara updated successfully.');
    }

    public function destroy(AhsPenyedia $ahsSedia)
    {
        $ahsSedia->delete();

        return redirect()->route('ahsSedia.index')
            ->with('success', 'Berita Acara deleted successfully.');
    }
}
