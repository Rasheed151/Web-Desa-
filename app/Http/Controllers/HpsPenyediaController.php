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
            'noKeg' => 'required|numeric',
            'ltrBelakang' => 'required|',
            'nerimaManfaat' => 'required|',
            'caraLaksana' => 'required|',
            'ketuaTpk' => 'required|',
            'sekTpk' => 'required|',
            'angTpk' => 'required|',
            'namaKasi' => 'nullable|',
            'jbtnKasi' => 'nullable|',
            'dilokasi' => 'required|',
            'tgglMulai' => 'required|date',
            'jangkaWaktu' => 'required|',
            'biayaKegiatan' => 'required|',
            'sebesarRp' => 'required|numeric'
        ]);

        HpsPenyedia::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('hpsSedia.index')
            ->with('success', 'Berita Acara created successfully.');
    }

    public function show($id)
    {
        $hpsSedia = HpsPenyedia::findOrFail($id);
        return view('persiapanpenyedia.kak.show_hps', compact('hpsSedia'));
    }

    public function edit(HpsPenyedia $hpsSedia)
    {
        return view('persiapanpenyedia.kak.edit_hps', compact('hpsSedia'));
    }

    public function update(Request $request, HpsPenyedia $hpsSedia)
    {
        $request->validate([
            'noKeg' => 'required|numeric',
            'ltrBelakang' => 'required|text',
            'nerimaManfaat' => 'required|',
            'caraLaksana' => 'required|',
            'ketuaTpk' => 'required|',
            'sekTpk' => 'required|',
            'angTpk' => 'required|',
            'namaKasi' => 'nullable|',
            'jbtnKasi' => 'nullable|',
            'dilokasi' => 'required|',
            'tgglMulai' => 'required|date',
            'jangkaWaktu' => 'required|',
            'biayaKegiatan' => 'required|',
            'sebesarRp' => 'required|numeric'
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
