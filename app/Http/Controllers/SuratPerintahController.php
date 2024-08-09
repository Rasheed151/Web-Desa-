<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratPerintah;

class SuratPerintahController extends Controller
{
    public function index()
    {
        $suratPerintah = SuratPerintah::where('userId', auth()->id())->get();
        return view('SuratPerintah.awal', compact('suratPerintah'));
    }

    public function create()
    {
        return view('SuratPerintah.create_SuratPerintah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|numeric',
            'noSpk' => 'required|numeric',
            'tgglSpk' => 'required|date',
            'namaPka' => 'required|string',
            'jbtnPka' => 'required|string',
            'namaPenyedia' => 'required|string',
            'namaToko' => 'required|string',
            'noSpl' => 'required|string',
            'tgglSpl' => 'required|date',
            'noBa' => 'required|string',
            'tgglBa' => 'required|date',
            'smbrDana' => 'required|string',
            'kegiatan' => 'required|string',
            'sbsr' => 'required|numeric',
            'jnsKontrak' => 'required|string',
            'wktuLaksana' => 'required|string',
        ]);

        SuratPerintah::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('suratPerintah.index')
            ->with('success', 'Surat Perintah created successfully.');
    }

    public function show($id)
    {
        $suratPerintah = SuratPerintah::findOrFail($id);
        return view('SuratPerintah.show_SuratPerintah', compact('suratPerintah'));
    }

    public function edit(SuratPerintah $suratPerintah)
    {
        return view('SuratPerintah.edit_SuratPerintah', compact('suratPerintah'));
    }

    public function update(Request $request, SuratPerintah $suratPerintah)
    {
        $request->validate([
            'no' => 'required|numeric',
            'noSpk' => 'required|numeric',
            'tgglSpk' => 'required|date',
            'namaPka' => 'required|string',
            'jbtnPka' => 'required|string',
            'namaPenyedia' => 'required|string',
            'namaToko' => 'required|string',
            'noSpl' => 'required|string',
            'tgglSpl' => 'required|date',
            'noBa' => 'required|string',
            'tgglBa' => 'required|date',
            'smbrDana' => 'required|string',
            'kegiatan' => 'required|string',
            'sbsr' => 'required|numeric',
            'jnsKontrak' => 'required|string',
            'wktuLaksana' => 'required|string',
        ]);

        $suratPerintah->update($request->all());

        return redirect()->route('suratPerintah.index')
            ->with('success', 'Surat Perintah updated successfully.');
    }

    public function destroy(SuratPerintah $suratPerintah)
    {
        $suratPerintah->delete();

        return redirect()->route('suratPerintah.index')
            ->with('success', 'Surat Perintah deleted successfully.');
    }
}
