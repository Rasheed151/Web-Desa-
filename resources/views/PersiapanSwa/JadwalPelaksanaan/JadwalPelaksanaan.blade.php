@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Jadwal Pelaksanaan Secara Swakelola</h1>

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
        <form action="{{ route('jadwalSwa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no" class="form-label">Nomor:</label>
                <input type="number" name="no" class="form-control" required placeholder="Nomor">
            </div>

            <div class="form-group">
                <label for="namaKegiatan" class="form-label">Nama Kegiatan:</label>
                <input name="namaKegiatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="kegiatan" class="form-label">Kegiatan:</label>
                <input name="kegiatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jdwlLaksana" class="form-label">jadwal Pelaksanaan:</label>
                <input type="date" name="jdwlLaksana" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="biaya" class="form-label">Biaya:</label>
                <input   type="number" name="biaya" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="bobot" class="form-label">Bobot:</label>
                <input  name="bobot" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="namaKasi" class="form-label">Nama Kasi:</label>
                <input  name="namaKasi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jbtnKasi" class="form-label">Jabatan Kasi:</label>
                <input  name="jbtnKasi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jdwlKerja1" class="form-label">Jadwal Kerja 1:</label>
                <input type="date" name="jdwlKerja1" class="form-control" >
            </div>
           
            <div class="form-group">
                <label for="jdwlKerja2" class="form-label">Jadwal Kerja 2:</label>
                <input type="date" name="jdwlKerja2" class="form-control" >
            </div>

            <div class="form-group">
                <label for="jdwlKerja3" class="form-label">Jadwal Kerja 3:</label>
                <input type="date" name="jdwlKerja3" class="form-control" >
            </div>

            <div class="form-group">
                <label for="jdwlKerja4" class="form-label">Jadwal Kerja 4:</label>
                <input type="date" name="jdwlKerja4" class="form-control" >
            </div>
            
            <div class="form-group">
                <label for="jdwlKerja5" class="form-label">Jadwal Kerja 5:</label>
                <input type="date" name="jdwlKerja5" class="form-control" >
            </div>

            <div class="form-group">
                <label for="jdwlKerja6" class="form-label">Jadwal Kerja 6:</label>
                <input type="date" name="jdwlKerja6" class="form-control" >
            </div>

            <div class="form-group">
                <label for="jdwlKerja7" class="form-label">Jadwal Kerja 7:</label>
                <input type="date" name="jdwlKerja7" class="form-control" >
            </div>

            <div class="form-group">
                <label for="jdwlKerja8" class="form-label">Jadwal Kerja 8:</label>
                <input type="date" name="jdwlKerja8" class="form-control" >
            </div>

            <div class="form-group">
    <label for="jdwlKerja9" class="form-label">Jadwal Kerja 9:</label>
    <input type="date" name="jdwlKerja9" class="form-control">
</div>

<div class="form-group">
    <label for="jdwlKerja10" class="form-label">Jadwal Kerja 10:</label>
    <input type="date" name="jdwlKerja10" class="form-control">
</div>

<div class="form-group">
    <label for="jdwlKerja11" class="form-label">Jadwal Kerja 11:</label>
    <input type="date" name="jdwlKerja11" class="form-control">
</div>

<div class="form-group">
    <label for="jdwlKerja12" class="form-label">Jadwal Kerja 12:</label>
    <input type="date" name="jdwlKerja12" class="form-control">
</div>

<div class="form-group">
    <label for="jdwlKerja13" class="form-label">Jadwal Kerja 13:</label>
    <input type="date" name="jdwlKerja13" class="form-control">
</div>

<div class="form-group">
    <label for="jdwlKerja14" class="form-label">Jadwal Kerja 14:</label>
    <input type="date" name="jdwlKerja14" class="form-control">
</div>

<div class="form-group">
    <label for="jdwlKerja15" class="form-label">Jadwal Kerja 15:</label>
    <input type="date" name="jdwlKerja15" class="form-control">
</div>

<div class="form-group">
    <label for="jdwlKerja16" class="form-label">Jadwal Kerja 16:</label>
    <input type="date" name="jdwlKerja16" class="form-control">
</div>

<div class="form-group">
    <label for="jdwlKerja17" class="form-label">Jadwal Kerja 17:</label>
    <input type="date" name="jdwlKerja17" class="form-control">
</div>

<div class="form-group">
    <label for="jdwlKerja18" class="form-label">Jadwal Kerja 18:</label>
    <input type="date" name="jdwlKerja18" class="form-control">
</div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>

@endsection