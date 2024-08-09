<?php

namespace App\Http\Controllers;

use App\Models\SuratPenawaran;
use Illuminate\Http\Request;

class SuratPenawaranController extends Controller
{
    public function index()
    {
        $suratPenawaran = SuratPenawaran::where('userId', auth()->id())->get();
        return view('PembelianPenawaran.SuratPenawaran.awal', compact('suratPenawaran'));
    }

    public function create()
    {
        return view('PembelianPenawaran.SuratPenawaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|numeric',
            'tggl' => 'required|date',
            'noSTawar' => 'required|string',
            'lampiran' => 'required|string',
            'namaPekerjaan' => 'required|string',
            'noSMinta' => 'required|string',
            'tgglSMinta' => 'required|date',
            'sebesar' => 'required|string',
            'jangkaWktu' => 'required|string',
            'tgglBa' => 'required|date',
            'pnwrnBerlaku' => 'required|string',
            'namaPemasok' => 'required|string',
            'namaToko' => 'required|string',
            'alamatToko' => 'required|string',
        ]);

        SuratPenawaran::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('suratPenawaran.index')
            ->with('success', 'Surat Penawaran created successfully.');
    }

    public function show($id)
    {
        $suratPenawaran = SuratPenawaran::findOrFail($id);
        return view('PembelianPenawaran.SuratPenawaran.show', compact('suratPenawaran'));
    }

    public function edit(SuratPenawaran $suratPenawaran)
    {
        return view('PembelianPenawaran.SuratPenawaran.edit', compact('suratPenawaran'));
    }

    public function update(Request $request, SuratPenawaran $suratPenawaran)
    {
        $request->validate([
            'no' => 'required|numeric',
            'tggl' => 'required|date',
            'noSTawar' => 'required|string',
            'lampiran' => 'required|string',
            'namaPekerjaan' => 'required|string',
            'noSMinta' => 'required|string',
            'tgglSMinta' => 'required|date',
            'sebesar' => 'required|string',
            'jangkaWktu' => 'required|string',
            'tgglBa' => 'required|date',
            'pnwrnBerlaku' => 'required|string',
            'namaPemasok' => 'required|string',
            'namaToko' => 'required|string',
            'alamatToko' => 'required|string',
        ]);

        $suratPenawaran->update($request->all());

        return redirect()->route('suratPenawaran.index')
            ->with('success', 'Surat Penawaran updated successfully.');
    }

    public function destroy(SuratPenawaran $suratPenawaran)
    {
        $suratPenawaran->delete();

        return redirect()->route('suratPenawaran.index')
            ->with('success', 'Surat Penawaran deleted successfully.');
    }
}
