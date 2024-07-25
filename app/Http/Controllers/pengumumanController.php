<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('pengumuman.pengumuman', compact('pengumuman'));
    }

    public function create()
    {
        return view('pengumuman.create_pengumuman');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|numeric',
            'namaKegiatan' => 'required|string',
            'nilaiPengadaan' => 'required|numeric',
            'caraPengadaan' => 'required|string',
            'volume' => 'required|string',
            'satuan' => 'required|string',
            'namaTpk' => 'required|string',
            'lksKegiatan' => 'required|string',
            'tglMulai' => 'required|date',
            'tglSelesai' => 'required|date',
            'jangkaWaktu' => 'required|string',
            'wktuPelaksanaan' => 'required|string',
            'tglPengumuman' => 'required|date',
        ]);

        Pengumuman::create($request->all());
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman created successfully.');
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pengumuman.show_pengumuman', compact('pengumuman'));
    }

    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('pengumuman.edit_pengumuman', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no' => 'required|numeric',
            'namaKegiatan' => 'required|string',
            'nilaiPengadaan' => 'required|numeric',
            'caraPengadaan' => 'required|string',
            'volume' => 'required|string',
            'satuan' => 'required|string',
            'namaTpk' => 'required|string',
            'lksKegiatan' => 'required|string',
            'tglMulai' => 'required|date',
            'tglSelesai' => 'required|date',
            'jangkaWaktu' => 'required|string',
            'wktuPelaksanaan' => 'required|string',
            'tglPengumuman' => 'required|date',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->update($request->all());
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman updated successfully.');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman deleted successfully.');
    }
}
