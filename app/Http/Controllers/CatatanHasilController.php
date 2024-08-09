<?php

namespace App\Http\Controllers;

use App\Models\CatatanHasil;
use Illuminate\Http\Request;

class CatatanHasilController extends Controller
{
    public function index()
    {
        $catatanHasil = CatatanHasil::where('userId', auth()->id())->get();
        return view('PelaksanaanSwa.CatatanHasil.awal', compact('catatanHasil'));
    }

    public function create()
    {
        return view('PelaksanaanSwa.CatatanHasil.CatatanHasil');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|numeric',
            'kegiatan' => 'required|string',
            'tempat' => 'required|string',
            'tggl' => 'required|date',
            'waktuPelaksana' => 'required|string',
            'agenda' => 'required|string',
            'noPerbup' => 'required|numeric',
            'namaKasi' => 'required|string',
            'jbtnKasi' => 'required|string',
            'noDpa' => 'required|numeric',
            'tgglDpa' => 'required|date',
            
            
        ]);

        CatatanHasil::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('catatanHasil.index')
            ->with('success', 'Catatan Hasil created successfully.');
    }

    public function show($id)
    {
        $catatanHasil = CatatanHasil::findOrFail($id);
        return view('PelaksanaanSwa.CatatanHasil.show_CatatanHasil', compact('catatanHasil'));
    }

    public function edit(CatatanHasil $catatanHasil)
    {
        return view('PelaksanaanSwa.CatatanHasil.edit_CatatanHasil', compact('catatanHasil'));
    }

    public function update(Request $request, CatatanHasil $catatanHasil)
    {
        $request->validate([
            'no' => 'required|numeric',
            'kegiatan' => 'required|string',
            'tempat' => 'required|string',
            'tggl' => 'required|date',
            'waktuPelaksana' => 'required|string',
            'agenda' => 'required|string',
            'ltrBelakang' => 'required|string',
            'pembahasan' => 'required|string',
            'tndkLanjut' => 'required|string',
            'pp' => 'required|string',
        ]);

        $catatanHasil->update($request->all());

        return redirect()->route('catatanHasil.index')
            ->with('success', 'Catatan Hasil updated successfully.');
    }

    public function destroy(CatatanHasil $catatanHasil)
    {
        $catatanHasil->delete();

        return redirect()->route('catatanHasil.index')
            ->with('success', 'Catatan Hasil deleted successfully.');
    }
}
