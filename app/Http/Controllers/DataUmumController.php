<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
use Illuminate\Http\Request;

class DataUmumController extends Controller
{

    public function index()
    {
        // Ambil semua data dari tabel data_umum
        $dataUmum = DataUmum::all();
        
        // Kirim data ke view
        return view('dataUmum', compact('dataUmum'));
    }

    public function create()
    {
        return view('dataUmum');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tempatDesa' => 'required|string|max:255',
            'alamatKantor' => 'required|string',
            'npwp' => 'required|string|max:255',
            'kodeDesa' => 'required|integer',
            'kepalaDesa' => 'required|string|max:255',
            'noPerbubPjb' => 'required|integer',
            'tanggalPerbubPjb' => 'required|date',
            'noKeputusanDpa' => 'required|integer',
            'tanggalKeputusanDpa' => 'required|date',
            'email' => 'required|email|unique:dataUmum,email',
        ]);

        DataUmum::create($request->all());

        return redirect()->route('dataUmum.index')
        ->with('success', 'Data umum created successfully.');
    }

    public function show(DataUmum $dataUmum){
        return view('show_dataUmum', compact('dataUmum'));
    }

    public function count()
    {
        $jumlahLaporan = DataUmum::count();
        return view('dashboard', compact('jumlahLaporan'));
    }

    public function edit(DataUmum $dataUmum)
    {
        return view('edit_dataUmum', compact('dataUmum'));
    }

    public function update(Request $request, DataUmum $dataUmum)
    {
        $request->validate([
            'tempatDesa' => 'required',
            'alamatKantor' => 'required',
            'npwp' => 'required',
            'kodeDesa' => 'required',
            'kepalaDesa' => 'required',
            'noPerbubPjb' => 'required',
            'tanggalPerbubPjb' => 'required',
            'noKeputusanDpa' => 'required',
            'tanggalKeputusanDpa' => 'required',
            'email' => 'required|email',
        ]);

        $dataUmum->update($request->all());

        return redirect()->route('dataUmum.index')
                        ->with('success', 'Data Umum updated successfully.');
    }

   public function destroy(DataUmum $dataUmum)
    {
        $dataUmum->delete();

        return redirect()->route('dataUmum.index')
                        ->with('success', 'Data Umum deleted successfully.');
    }
}
