@extends('layouts.show')

@section('content')
<div class="container-show">
    <h1>Detail Jadwal Pelaksanaan Secara Swakelola</h1>

    <table class="data-table">
        <tr>
            <th>Nomor</th>
            <td>{{ $jadwal->no }}</td>
        </tr>
        <tr>
            <th>Nama Kegiatan</th>
            <td>{{ $jadwal->namaKegiatan }}</td>
        </tr>
        <tr>
            <th>Kegiatan</th>
            <td>{{ $jadwal->kegiatan }}</td>
        </tr>
        <tr>
            <th>Jadwal Pelaksanaan</th>
            <td>{{ $jadwal->jdwlLaksana }}</td>
        </tr>
        <tr>
            <th>Biaya</th>
            <td>{{ $jadwal->biaya }}</td>
        </tr>
        <tr>
            <th>Bobot</th>
            <td>{{ $jadwal->bobot }}</td>
        </tr>
        <tr>
            <th>Nama Kasi</th>
            <td>{{ $jadwal->namaKasi }}</td>
        </tr>
        <tr>
            <th>Jabatan Kasi</th>
            <td>{{ $jadwal->jbtnKasi }}</td>
        </tr>
        <tr>
            <th>Jadwal Kerja 1</th>
            <td>{{ $jadwal->jdwlKerja1 }}</td>
        </tr>
        <tr>
            <th>Jadwal Kerja 2</th>
            <td>{{ $jadwal->jdwlKerja2 }}</td>
        </tr>
        <tr>
            <th>Jadwal Kerja 3</th>
            <td>{{ $jadwal->jdwlKerja3 }}</td>
        </tr>
        <tr>
            <th>Jadwal Kerja 4</th>
            <td>{{ $jadwal->jdwlKerja4 }}</td>
        </tr>
        <tr>
            <th>Jadwal Kerja 5</th>
            <td>{{ $jadwal->jdwlKerja5 }}</td>
        </tr>
        <tr>
            <th>Jadwal Kerja 6</th>
            <td>{{ $jadwal->jdwlKerja6 }}</td>
        </tr>
        <tr>
            <th>Jadwal Kerja 7</th>
            <td>{{ $jadwal->jdwlKerja7 }}</td>
        </tr>
        <tr>
            <th>Jadwal Kerja 8</th>
            <td>{{ $jadwal->jdwlKerja8 }}</td>
        </tr>
    </table>

    <a href="{{ route('jadwalSwa.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
