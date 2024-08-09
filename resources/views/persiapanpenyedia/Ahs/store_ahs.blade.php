@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Berita Acara</h1>

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container">
        <form action="{{ route('hpsSedia.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="noKeg" class="form-label">No Kegiatan. :</label>
                <input type="number" name="noKeg" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="kegiatan" class="form-label">Kegiatan :</label>
                <input type="text" name="kegiatan" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi :</label>
                <textarea name="lokasi" class="form-control" rows="3" placeholder="Type here.."></textarea>
            </div>

            <div class="mb-3">
                <label for="namaKasi" class="form-label">Nama Kepala Seksi:</label>
                <input type="text" name="namaKasi" class="form-control" placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="jbtnKasi" class="form-label">Jabatan Kepala Seksi:</label>
                <input type="text" name="jbtnKasi" class="form-control" placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="idHps" class="form-label">Id Hps :</label>
                <input type="number" name="idHps" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="namaBarjas" class="form-label">Barang/Jasa :</label>
                <input type="text" name="namaBarjas" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="spesifikasi" class="form-label">Spesifikasi :</label>
                <input type="text" name="spesifikasi" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="kode" class="form-label">Kode :</label>
                <input type="text" name="kode" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="koefisien" class="form-label">Koefisien :</label>
                <input type="number" name="koefisien" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="volume" class="form-label">Volume :</label>
                <input type="number" name="volume" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="satuan" class="form-label">Satuan :</label>
                <input type="text" name="satuan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="hrgSatuan" class="form-label">Harga Satuan :</label>
                <input type="number" name="hrgSatuan" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="jmlhHarga" class="form-label">Total Harga :</label>
                <input type="number" name="jmlhHarga" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis :</label>
                <input type="number" name="jenis" class="form-control" required placeholder="Type here..">
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
        <a href="{{ route('hpsSedia.index') }}" class= "btn-back">Kembali</a>
    </div>
</div>

@endsection

