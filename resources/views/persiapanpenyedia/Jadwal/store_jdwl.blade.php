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
        <form action="{{ route('jadwal.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="no" class="form-label">Nomor :</label>
                <input type="number" name="no" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="namaKegiatan" class="form-label">Kegiatan :</label>
                <input type="text" name="namaKegiatan" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="ketuaTpk" class="form-label">Ketua TPK :</label>
                <input type="text" name="ketuaTpk" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="sekTpk" class="form-label">Sekretaris TPK :</label>
                <input type="text" name="sekTpk" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="angTpk" class="form-label">Anggota TPK :</label>
                <input type="text" name="angTpk" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="jmlhWaktu" class="form-label">Jumlah Waktu :</label>
                <input type="text" name="jmlhWaktu" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="wktLaksanaDari" class="form-label">Waktu Pelaksanaan (dari) :</label>
                <input type="date" name="wktLaksanaDari" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="wktLaksanaSampai" class="form-label">Waktu Pelaksanaan (sampai) :</label>
                <input type="date" name="wktLaksanaSampai" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nlaiPekerjaan" class="form-label">Nilai Pekerjaan :</label>
                <input type="number" name="nlaiPekerjaan" class="form-control" required placeholder="Type here..">
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
                <label for="lokasi" class="form-label">Lokasi :</label>
                <textarea name="lokasi" class="form-control" rows="3" ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>

@endsection

