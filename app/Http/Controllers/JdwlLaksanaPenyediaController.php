<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPenyedia;

class JdwlLaksanaPenyediaController extends Controller
{
    public function index()
    {
        $jadwal = JadwalPenyedia::where('userId', auth()->id())->get();
        return view('persiapanpenyedia.jadwal.jdwl', compact('jadwal'));
    }

    public function create()
    {
        return view('persiapanpenyedia.jadwal.store_jdwl');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|numeric',
            'namaKegiatan' => 'required|',
            'ketuaTpk' => 'required|',
            'sekTpk' => 'required|',
            'angTpk' => 'required|',
            'jmlhWaktu' => 'required|',
            'wktLaksanaDari' => 'required|date',
            'wktLaksanaSampai' => 'required|date',
            'nlaiPekerjaan' => 'required|numeric',
            'namaKasi' => 'nullable|',
            'jbtnKasi' => 'nullable|',
            'lokasi' => 'nullable|'
        ]);

        JadwalPenyedia::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('jadwal.index')
            ->with('success', 'Berita Acara created successfully.');
    }

    public function show($id)
    {
        $jadwal = JadwalPenyedia::findOrFail($id);
        return view('persiapanpenyedia.jadwal.show_jdwl', compact('jadwal'));
    }

    public function edit(JadwalPenyedia $jadwal)
    {
        return view('persiapanpenyedia.jadwal.edit_jdwl', compact('jadwal'));
    }

    public function update(Request $request, JadwalPenyedia $jadwal)
    {
        $request->validate([
            'no' => 'required|numeric',
            'namaKegiatan' => 'required|',
            'ketuaTpk' => 'required|',
            'sekTpk' => 'required|',
            'angTpk' => 'required|',
            'jmlhWaktu' => 'required|',
            'wktLaksanaDari' => 'required|date',
            'wktLaksanaSampai' => 'required|date',
            'nlaiPekerjaan' => 'required|numeric',
            'namaKasi' => 'nullable|',
            'jbtnKasi' => 'nullable|',
            'lokasi' => 'nullable|'
        ]);

        $jadwal->update($request->all());

        return redirect()->route('jadwal.index')
            ->with('success', 'Berita Acara updated successfully.');
    }

    public function destroy(JadwalPenyedia $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwal.index')
            ->with('success', 'Berita Acara deleted successfully.');
    }
}
