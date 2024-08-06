<?php

namespace App\Http\Controllers;

use App\Models\Rkp;
use Illuminate\Http\Request;

class RkpController extends Controller
{
    public function index()
    {
        $rkps = Rkp::all();
        return view('rkp.awal', compact('rkps'));
    }

    public function create()
    {
        return view('rkp.rkp');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required|numeric',
            'TBL' => 'required|date',
            'bidang' => 'required|string',
            'subBidang' => 'required|string',
            'jnsKegiatan' => 'required|string',
            'lksKegiatan' => 'required|string',
            'volume' => 'required|string',
            'sasaran' => 'required|string',
            'wktuPelaksanaan' => 'required|string',
            'jmlhBiaya' => 'required|numeric',
            'smbrBiaya' => 'required|string',
            'swakelola' => 'boolean',
            'krjsmaAndes' => 'boolean',
            'krjsmaPitig' => 'boolean',
            'rncnaPegiat' => 'required|string',
        ]);

        $data = $request->all();
        $data['swakelola'] = $request->filled('swakelola');
        $data['krjsmaAndes'] = $request->filled('krjsmaAndes');
        $data['krjsmaPitig'] = $request->filled('krjsmaPitig');

        Rkp::create($request->all());
        return redirect()->route('rkp.index')->with('success', 'Data RKPD berhasil ditambahkan.');
    }

    public function show($id)
    {
        $rkp = Rkp::findOrFail($id);
        return view('rkp.show_rkp', compact('rkp'));
    }

    public function edit($id)
    {
        $rkp = Rkp::findOrFail($id);
        return view('rkp.edit_rkp', compact('rkp'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no' => 'required|numeric',
            'TBL' => 'required|date',
            'bidang' => 'required|string',
            'subBidang' => 'required|string',
            'jnsKegiatan' => 'required|string',
            'lksKegiatan' => 'required|string',
            'volume' => 'required|string',
            'sasaran' => 'required|string',
            'wktuPelaksanaan' => 'required|string',
            'jmlhBiaya' => 'required|numeric',
            'smbrBiaya' => 'required|string',
            'swakelola' => 'boolean',
            'krjsmaAndes' => 'boolean',
            'krjsmaPitig' => 'boolean',
            'rncnaPegiat' => 'required|string',
        ]);

        $rkp = Rkp::findOrFail($id);
        $rkp->update($request->all());
        return redirect()->route('rkp.index')->with('success', 'Data RKPD berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Rkp::findOrFail($id)->delete();
        return redirect()->route('rkp.index')->with('success', 'Data RKPD berhasil dihapus.');
    }
}
