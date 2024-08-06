<?php

namespace App\Http\Controllers;

use App\Models\DataUmum;
use Illuminate\Http\Request;

class DataUmumController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel data_umum
        // Filter data berdasarkan ID pengguna yang sedang login
        $dataUmum = DataUmum::where('userId', auth()->id())->get();
        
        // Kirim data ke view
        return view('dataUmum.dataUmum', compact('dataUmum'));
    }

    public function create()
    {
        return view('dataUmum.create_dataUmum');
    }

    public function store(Request $request)
    {
        $request->validate([
            'desa' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'npwp' => 'required|string|max:255',
            'kodeDesa' => 'required|numeric',
            'kepalaDesa' => 'required|string|max:255',
            'noPerbubPjb' => 'required|numeric',
            'tanggalPerbubPjb' => 'required|date',
            'noKeputusanDpa' => 'required|numeric',
            'tanggalKeputusanDpa' => 'required|date',
            'email' => 'required|email|unique:dataUmum,email',
        ]);

        // Include the logged-in user ID
        DataUmum::create(array_merge($request->all(), ['userId' => auth()->id()]));

        return redirect()->route('profil.index')
            ->with('success', 'Data umum created successfully.');
    }

    public function show(DataUmum $dataUmum)
    {
        // Ensure the data belongs to the logged-in user
        if ($dataUmum->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        return view('dataUmum.show_dataUmum', compact('dataUmum'));
    }

    public function count()
    {
        // Count data for the logged-in user
        $jumlahLaporan = DataUmum::where('userId', auth()->id())->count();
        return view('dashboard', compact('jumlahLaporan'));
    }

    public function edit(DataUmum $dataUmum)
    {
        // Ensure the data belongs to the logged-in user
        if ($dataUmum->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        return view('dataUmum.edit_dataUmum', compact('dataUmum'));
    }

    public function update(Request $request, DataUmum $dataUmum)
    {
        // Ensure the data belongs to the logged-in user
        if ($dataUmum->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        $request->validate([
            'desa' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'npwp' => 'required|string|max:255',
            'kodeDesa' => 'required|numeric',
            'kepalaDesa' => 'required|string|max:255',
            'noPerbubPjb' => 'required|numeric',
            'tanggalPerbubPjb' => 'required|date',
            'noKeputusanDpa' => 'required|numeric',
            'tanggalKeputusanDpa' => 'required|date',
            'email' => 'required|email',
        ]);

        $dataUmum->update($request->all());

        return redirect()->route('profil.index')
            ->with('success', 'Data Umum updated successfully.');
    }

    public function destroy(DataUmum $dataUmum)
    {
        // Ensure the data belongs to the logged-in user
        if ($dataUmum->userId !== auth()->id()) {
            abort(403, 'Unauthorized access');
        }

        $dataUmum->delete();

        return redirect()->route('profil.index')
            ->with('success', 'Data Umum deleted successfully.');
    }
}
