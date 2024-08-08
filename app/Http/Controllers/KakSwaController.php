<?php

namespace App\Http\Controllers;

use App\Models\KakSwa;
use Illuminate\Http\Request;

class KakSwaController extends Controller
{
    public function index()
    {
        $kakSwa = KakSwa::where('userId', auth()->id())->get();
        return view('PersiapanSwa.kak.awal', compact('kakSwa'));
    }

    public function create()
    {
        return view('PersiapanSwa.kak.kak');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|numeric',
            'ltrBelakang' => 'required|string',
            'nerimaManfaat' => 'required|string',
            'caraLaksana' => 'required|string',
            'ketuaTpk' => 'required|string',
            'sekTpk' => 'required|string',
            'angTpk' => 'required|string',
            'namaKasi' => 'required|string',
            'jbtnKasi' => 'required|string',
            'diLokasi' => 'required|string',
            'tgglMulai' => 'required|date',
            'jangkaWaktu' => 'required|string',
            'biayaKegiatan' => 'required|string',
            'sebesarRp' => 'required|numeric',
        ]);

        KakSwa::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('KakSwa.index')
            ->with('success', 'kak Pelaksanaan created successfully.');
    }

    public function show($id)
    {
        $kak = KakSwa::findOrFail($id);
        return view('PersiapanSwa.kak.show_kak', compact('kak'));
    }

    public function edit(KakSwa $kakSwa)
    {
        return view('PersiapanSwa.kak.edit_kak', compact('kak'));
    }

    public function update(Request $request, KakSwa $kakSwa)
    {
        $request->validate([
            'no' => 'required|numeric',
            'ltrBelakang' => 'required|string',
            'nerimaManfaat' => 'required|string',
            'caraLaksana' => 'required|string',
            'ketuaTpk' => 'required|string',
            'sekTpk' => 'required|string',
            'angTpk' => 'required|string',
            'namaKasi' => 'required|string',
            'jbtnKasi' => 'required|string',
            'diLokasi' => 'required|string',
            'tgglMulai' => 'required|date',
            'jangkaWaktu' => 'required|string',
            'biayaKegiatan' => 'required|string',
            'sebesarRp' => 'required|numeric',
        ]);

        $kakSwa->update($request->all());

        return redirect()->route('KakSwa.index')
            ->with('success', 'kak Acara updated successfully.');
    }

    public function destroy(KakSwa $KakSwa)
    {
        $KakSwa->delete();

        return redirect()->route('KakSwa.index')
            ->with('success', 'Berita Acara deleted successfully.');
    }

}
