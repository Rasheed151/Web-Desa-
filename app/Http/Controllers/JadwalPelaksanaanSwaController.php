<?php

namespace App\Http\Controllers;
use App\Models\JadwalSwa;
use Illuminate\Http\Request;

class JadwalPelaksanaanSwaController extends Controller
{
    public function index()
    {
        $jadwal = JadwalSwa::where('userId', auth()->id())->get();
        return view('PersiapanSwa.JadwalPelaksanaan.awal', compact('jadwal'));
    }

    public function create()
    {
        return view('PersiapanSwa.JadwalPelaksanaan.JadwalPelaksanaan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|numeric',
        'namaKegiatan' => 'required|string',
        'kegiatan' => 'required|string',
        'jdwlLaksana' => 'required|string',
        'biaya' => 'required|numeric',
        'bobot' => 'required|string',
        'namaKasi' => 'required|string',
        'jbtnKasi' => 'required|string',
        'jdwlKerja1' => 'nullable|date',
        'jdwlKerja2' => 'nullable|date',
        'jdwlKerja3' => 'nullable|date',
        'jdwlKerja4' => 'nullable|date',
        'jdwlKerja5' => 'nullable|date',
        'jdwlKerja6' => 'nullable|date',
        'jdwlKerja7' => 'nullable|date',
        'jdwlKerja8' => 'nullable|date',
        'jdwlKerja9' => 'nullable|date',
        'jdwlKerja10' => 'nullable|date',
        'jdwlKerja11' => 'nullable|date',
        'jdwlKerja12' => 'nullable|date',
        'jdwlKerja13' => 'nullable|date',
        'jdwlKerja14' => 'nullable|date',
        'jdwlKerja15' => 'nullable|date',
        'jdwlKerja16' => 'nullable|date',
        'jdwlKerja17' => 'nullable|date',
        'jdwlKerja18' => 'nullable|date',
        ]);

        JadwalSwa::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('jadwalSwa.index')
            ->with('success', 'Jadwal Pelaksanaan created successfully.');
    }

    public function show($id)
    {
        $jadwal = JadwalSwa::findOrFail($id);
        return view('PersiapanSwa.JadwalPelaksanaan.show_JadwalPelaksanaan', compact('jadwal'));
    }

    public function edit(JadwalSwa $jadwalSwa)
    {
        return view('PersiapanSwa.JadwalPelaksanaan.edit_JadwalPelaksanaan', compact('jadwalSwa'));
    }

    public function update(Request $request, JadwalSwa $jadwalSwa)
    {
        $request->validate([
            'no' => 'required|numeric',
        'namaKegiatan' => 'required|string',
        'kegiatan' => 'required|string',
        'jdwlLaksana' => 'required|string',
        'biaya' => 'required|numeric',
        'bobot' => 'required|string',
        'namaKasi' => 'required|string',
        'jbtnKasi' => 'required|string',
        'jdwlKerja1' => 'nullable|date',
        'jdwlKerja2' => 'nullable|date',
        'jdwlKerja3' => 'nullable|date',
        'jdwlKerja4' => 'nullable|date',
        'jdwlKerja5' => 'nullable|date',
        'jdwlKerja6' => 'nullable|date',
        'jdwlKerja7' => 'nullable|date',
        'jdwlKerja8' => 'nullable|date',
        'jdwlKerja9' => 'nullable|date',
        'jdwlKerja10' => 'nullable|date',
        'jdwlKerja11' => 'nullable|date',
        'jdwlKerja12' => 'nullable|date',
        'jdwlKerja13' => 'nullable|date',
        'jdwlKerja14' => 'nullable|date',
        'jdwlKerja15' => 'nullable|date',
        'jdwlKerja16' => 'nullable|date',
        'jdwlKerja17' => 'nullable|date',
        'jdwlKerja18' => 'nullable|date',
        ]);

        $jadwalSwa->update($request->all());

        return redirect()->route('jadwalSwa.index')
            ->with('success', 'jadwal Acara updated successfully.');
    }

    public function destroy(JadwalSwa $jadwalSwa)
    {
        $jadwalSwa->delete();

        return redirect()->route('jadwalSwa.index')
            ->with('success', 'Berita Acara deleted successfully.');
    }
}
