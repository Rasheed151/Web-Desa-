@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Create Pengumuman</h1>

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
            <form action="{{ route('pengumuman.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="no" class="form-label">Nomor:</label>
                    <input type="number" name="no" class="form-control" required placeholder="Nomor">
                </div>

                <div class="mb-3">
                    <label for="namaKegiatan" class="form-label">Nama Kegiatan:</label>
                    <input type="text" name="namaKegiatan" class="form-control" required placeholder="Nama Kegiatan">
                </div>

                <div class="mb-3">
                    <label for="nilaiPengadaan" class="form-label">Nilai Pengadaan:</label>
                    <input type="number" name="nilaiPengadaan" class="form-control" step="0.01" required placeholder="Nilai Pengadaan">
                </div>

                <div class="mb-3">
                    <label for="caraPengadaan" class="form-label">Cara Pengadaan:</label>
                    <input type="text" name="caraPengadaan" class="form-control" required placeholder="Cara Pengadaan">
                </div>

                <div class="mb-3">
                    <label for="volume" class="form-label">Volume:</label>
                    <input type="text" name="volume" class="form-control" required placeholder="Volume">
                </div>

                <div class="mb-3">
                    <label for="satuan" class="form-label">Satuan:</label>
                    <input type="text" name="satuan" class="form-control" required placeholder="Satuan">
                </div>

                <div class="mb-3">
                    <label for="namaTpk" class="form-label">Nama TPK:</label>
                    <input type="text" name="namaTpk" class="form-control" required placeholder="Nama TPK">
                </div>

                <div class="mb-3">
                    <label for="lksKegiatan" class="form-label">Lokasi Kegiatan:</label>
                    <input type="text" name="lksKegiatan" class="form-control" required placeholder="Lokasi Kegiatan">
                </div>

                <div class="mb-3">
                    <label for="tglMulai" class="form-label">Tanggal Mulai:</label>
                    <input type="date" name="tglMulai" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="tglSelesai" class="form-label">Tanggal Selesai:</label>
                    <input type="date" name="tglSelesai" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="jangkaWaktu" class="form-label">Jangka Waktu:</label>
                    <input type="text" name="jangkaWaktu" class="form-control" required placeholder="Jangka Waktu">
                </div>

                <div class="mb-3">
                    <label for="wktuPelaksanaan" class="form-label">Waktu Pelaksanaan:</label>
                    <input type="text" name="wktuPelaksanaan" class="form-control" required placeholder="Waktu Pelaksanaan">
                </div>

                <div class="mb-3">
                    <label for="tglPengumuman" class="form-label">Tanggal Pengumuman:</label>
                    <input type="date" name="tglPengumuman" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Masukan Data</button>
            </form>
        </div>
    </div>

    @endsection
