<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KakPenyedia;

class KakPenyediaController extends Controller
{
    public function index()
    {
        $kakSedia = KakPenyedia::where('userId', auth()->id())->get();
        return view('persiapanpenyedia.kak.kak', compact('kakSedia'));
    }

    public function create()
    {
        return view('persiapanpenyedia.kak.store_kak');
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
            'namaKasi' => 'required|',
            'jbtnKasi' => 'required|',
            'diLokasi' => 'required|',
            'tgglMulai' => 'required|date',
            'jangkaWaktu' => 'required|',
            'biayaKegiatan' => 'required|',
            'sebesarRp' => 'required|numeric'
        ]);

        KakPenyedia::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('kakSedia.index')
            ->with('success', 'Berita Acara created successfully.');
    }

    public function show($id)
    {
        $kakSedia = KakPenyedia::findOrFail($id);
        return view('persiapanpenyedia.kak.show_kak', compact('kakSedia'));
    }

    public function edit(KakPenyedia $kakSedia)
    {
        return view('persiapanpenyedia.kak.edit_kak', compact('kakSedia'));
    }

    public function update(Request $request, KakPenyedia $kakSedia)
    {
        $request->validate([
            'noKeg' => 'required|numeric',
            'ltrBelakang' => 'required|text',
            'nerimaManfaat' => 'required|',
            'caraLaksana' => 'required|',
            'ketuaTpk' => 'required|',
            'sekTpk' => 'required|',
            'angTpk' => 'required|',
            'namaKasi' => 'required|',
            'jbtnKasi' => 'required|',
            'diLokasi' => 'required|',
            'tgglMulai' => 'required|date',
            'jangkaWaktu' => 'required|',
            'biayaKegiatan' => 'required|',
            'sebesarRp' => 'required|numeric'
        ]);

        $kakSedia->update($request->all());

        return redirect()->route('kakSedia.index')
            ->with('success', 'Berita Acara updated successfully.');
    }

    public function destroy(KakPenyedia $kakSedia)
    {
        $kakSedia->delete();

        return redirect()->route('kakSedia.index')
            ->with('success', 'Berita Acara deleted successfully.');
    }
}
