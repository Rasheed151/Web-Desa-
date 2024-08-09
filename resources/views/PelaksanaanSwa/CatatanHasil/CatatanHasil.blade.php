@extends('layouts.app')

@section('content')
<h1 class="mb-4">Buat Catatan Hasil Pelaksanaan Secara Swakelola</h1>

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
        <form action="{{ route('CatatanHasilSwa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no" class="form-label">Nomor:</label>
                <input type="number" name="no" class="form-control" required placeholder="Nomor">
            </div>

            <div class="form-group">
                <label for="kegiatan" class="form-label">kegiatan:</label>
                <input name="kegiatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tempat" class="form-label">Tempat:</label>
                <input name="tempat" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tggl" class="form-label">Tanggal:</label>
                <input type="date" name="tggl" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="waktuPelaksana" class="form-label">Waktu Pelaksana:</label>
                <input name="waktuPelaksana" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="agenda" class="form-label">Agenda:</label>
                <input name="agenda" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="noPerbup" class="form-label">NO Perpub:</label>
                <input type="number" name="noPerbup" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="namaKasi" class="form-label">Nama kasi:</label>
                <input name="namaKasi" class="form-control" required>
            </div>

             <div class="form-group">
                <label for="jbtnKasi" class="form-label">Jabatan Kasi:</label>
                <input name="jbtnKasi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="noDpa" class="form-label">Nomor DPA:</label>
                <input type="number" name="noDpa" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tgglDpa" class="form-label">Tanggal Dpa:</label>
                <input type="date" name="tgglDpa" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>

@endsection
