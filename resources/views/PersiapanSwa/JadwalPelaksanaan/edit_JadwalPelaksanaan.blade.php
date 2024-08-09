@extends('layouts.edit')

@section('content')

<h1 class="mb-4">Edit Jadwal Pelaksanaan Secara Swakelola</h1>
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

    <form action="{{ route('jadwalSwa.update', $jadwalSwa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="from-group">
                <label for="no" class="form-label">Nomor:</label>
                <input type="number" name="no" class="form-control value= {{ $jadwalSwa->no }}" required placeholder="Nomor">
            </div>

            <div class="from-group">
                <label for="namaKegiatan" class="form-label">Nama Kegiatan:</label>
                <input name="namaKegiatan" class="form-control value= {{ $jadwalSwa->namaKegiatan }}" required>
            </div>

            <div class="from-group">
                <label for="kegiatan" class="form-label">Kegiatan:</label>
                <input name="kegiatan" class="form-control value= {{ $jadwalSwa->nokegiatan }}" required>
            </div>

            <div class="from-group">
                <label for="jdwlLaksana" class="form-label">jadwal Pelaksanaan:</label>
                <input  name="jdwlLaksana" class="form-control value= {{ $jadwalSwa->jdwlLaksana }}" required>
            </div>

            <div class="from-group">
                <label for="biaya" class="form-label">Biaya:</label>
                <input   type="number" name="biaya" class="form-control value= {{ $jadwalSwa->biaya }}" required>
            </div>

            <div class="from-group">
                <label for="bobot" class="form-label">Bobot:</label>
                <input  name="bobot" class="form-control value= {{ $jadwalSwa->bobot }}" required>
            </div>

            <div class="from-group">
                <label for="namaKasi" class="form-label">Nama Kasi:</label>
                <input  name="namaKasi" class="form-control value= {{ $jadwalSwa->nnamaKasio }}" required>
            </div>

            <div class="from-group">
                <label for="jbtnKasi" class="form-label">Jabatan Kasi:</label>
                <input  name="jbtnKasi" class="form-control value= {{ $jadwalSwa->jbtnKasi }}" required>
            </div>

            <div class="from-group">
                <label for="jdwlKerja1" class="form-label">Jadwal Kerja 1:</label>
                <input type="date" name="jdwlKerja1" class="form-control value= {{ $jadwalSwa->jdwlKerja1 }}" required>
            </div>
           
            <div class="from-group">
                <label for="jdwlKerja2" class="form-label">Jadwal Kerja 2:</label>
                <input type="date" name="jdwlKerja2" class="form-control value= {{ $jadwalSwa->jdwlKerja2 }}" required>
            </div>

            <div class="from-group">
                <label for="jdwlKerja3" class="form-label">Jadwal Kerja 3:</label>
                <input type="date" name="jdwlKerja3" class="form-control" required>
            </div>

            <div class="from-group">
                <label for="jdwlKerja4" class="form-label">Jadwal Kerja 4:</label>
                <input type="date" name="jdwlKerja4" class="form-control" required>
            </div>
            
            <div class="from-group">
                <label for="jdwlKerja5" class="form-label">Jadwal Kerja 5:</label>
                <input type="date" name="jdwlKerja5" class="form-control" required>
            </div>

            <div class="from-group">
                <label for="jdwlKerja6" class="form-label">Jadwal Kerja 6:</label>
                <input type="date" name="jdwlKerja6" class="form-control" required>
            </div>

            <div class="from-group">
                <label for="jdwlKerja7" class="form-label">Jadwal Kerja 7:</label>
                <input type="date" name="jdwlKerja7" class="form-control" required>
            </div>

            <div class="from-group">
                <label for="jdwlKerja8" class="form-label">Jadwal Kerja 8:</label>
                <input type="date" name="jdwlKerja8" class="form-control" required>
            </div>

        <button type="submit" class="btn btn-primary">Update Data</button>

        <a href="{{ route('jadwalSwa.index') }}" class= "btn-back">Kembali</a>
    </form>
</div>
@endsection
