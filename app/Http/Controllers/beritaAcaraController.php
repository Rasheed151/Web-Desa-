<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use Illuminate\Http\Request;

class BeritaAcaraController extends Controller
{
    public function index()
    {
        $beritaAcara = BeritaAcara::all();
        return view('beritaAcara.awal', compact('beritaAcara'));
    }

    public function create()
    {
        return view('beritaAcara.beritaAcara');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|numeric',
            'date' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'tempat' => 'required|string',
            'bahasKegiatan' => 'required|string',
            'ketuaBpd' => 'required|string',
            'wklMasyarakat' => 'required|string',
            'pimpinanRapat' => 'required|string',
            'notulen' => 'required|string',
            'ns1' => 'nullable|string',
            'ns1Dari' => 'nullable|string',
            'ns2' => 'nullable|string',
            'ns2Dari' => 'nullable|string',
            'ns3' => 'nullable|string',
            'ns3Dari' => 'nullable|string',
            'ns4' => 'nullable|string',
            'ns4Dari' => 'nullable|string',
            'ns5' => 'nullable|string',
            'ns5Dari' => 'nullable|string',
            'materiPembahasan' => 'required|string',
            'kesepakatanAkhir' => 'required|string',
        ]);

        BeritaAcara::create($request->all());

        return redirect()->route('beritaAcara.index')
            ->with('success', 'Berita Acara created successfully.');
    }

    public function show(BeritaAcara $beritaAcara)
    {
        return view('beritaAcara.show_beritaAcara', compact('beritaAcara'));
    }

    public function edit(BeritaAcara $beritaAcara)
    {
        return view('beritaAcara.edit_beritaAcara', compact('beritaAcara'));
    }

    public function update(Request $request, BeritaAcara $beritaAcara)
    {
        $request->validate([
            'no' => 'required|numeric',
            'date' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'tempat' => 'required|string',
            'bahasKegiatan' => 'required|string',
            'ketuaBpd' => 'required|string',
            'wklMasyarakat' => 'required|string',
            'pimpinanRapat' => 'required|string',
            'notulen' => 'required|string',
            'ns1' => 'nullable|string',
            'ns1Dari' => 'nullable|string',
            'ns2' => 'nullable|string',
            'ns2Dari' => 'nullable|string',
            'ns3' => 'nullable|string',
            'ns3Dari' => 'nullable|string',
            'ns4' => 'nullable|string',
            'ns4Dari' => 'nullable|string',
            'ns5' => 'nullable|string',
            'ns5Dari' => 'nullable|string',
            'materiPembahasan' => 'required|string',
            'kesepakatanAkhir' => 'required|string',
        ]);

        $beritaAcara->update($request->all());

        return redirect()->route('beritaAcara.index')
            ->with('success', 'Berita Acara updated successfully.');
    }

    public function destroy(BeritaAcara $beritaAcara)
    {
        $beritaAcara->delete();

        return redirect()->route('beritaAcara.index')
            ->with('success', 'Berita Acara deleted successfully.');
    }
}
