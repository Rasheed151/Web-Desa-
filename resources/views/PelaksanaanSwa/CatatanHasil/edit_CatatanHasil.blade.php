@extends('layouts.edit')

@section('content')

<h1 class="mb-4">Edit Catatan Hasil Pelaksanaan Swakelola</h1>
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

    <form action="{{ route('catatanHasil.update', $catatanHasil->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="from-group">
            <label for="no" class="form-label">Nomor:</label>
            <input type="number" name="no" class="form-control" value="{{ $catatanHasil->no }}" required placeholder="Nomor">
        </div>

        <div class="from-group">
            <label for="namaKegiatan" class="form-label">Nama Kegiatan:</label>
            <input name="namaKegiatan" class="form-control" value="{{ $catatanHasil->namaKegiatan }}" required>
        </div>

        <div class="from-group">
            <label for="kegiatan" class="form-label">Kegiatan:</label>
            <input name="kegiatan" class="form-control" value="{{ $catatanHasil->kegiatan }}" required>
        </div>

        <div class="from-group">
            <label for="jadwalPelaksanaan" class="form-label">Jadwal Pelaksanaan:</label>
            <input name="jadwalPelaksanaan" class="form-control" value="{{ $catatanHasil->jadwalPelaksanaan }}" required>
        </div>

        <div class="from-group">
            <label for="biaya" class="form-label">Biaya:</label>
            <input type="number" name="biaya" class="form-control" value="{{ $catatanHasil->biaya }}" required>
        </div>

        <div class="from-group">
            <label for="bobot" class="form-label">Bobot:</label>
            <input name="bobot" class="form-control" value="{{ $catatanHasil->bobot }}" required>
        </div>

        <div class="from-group">
            <label for="namaKasi" class="form-label">Nama Kasi:</label>
            <input name="namaKasi" class="form-control" value="{{ $catatanHasil->namaKasi }}" required>
        </div>

        <div class="from-group">
            <label for="jabatanKasi" class="form-label">Jabatan Kasi:</label>
            <input name="jabatanKasi" class="form-control" value="{{ $catatanHasil->jabatanKasi }}" required>
        </div>

        <div class="from-group">
            <label for="catatan" class="form-label">Catatan:</label>
            <textarea name="catatan" class="form-control" required>{{ $catatanHasil->catatan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Data</button>

        <a href="{{ route('CatatanHasilSwa.index') }}" class="btn-back">Kembali</a>
    </form>
</div>
@endsection
