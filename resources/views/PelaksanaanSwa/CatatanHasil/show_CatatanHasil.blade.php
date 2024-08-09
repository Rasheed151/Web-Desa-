@extends('layouts.show')

@section('content')
<div class="container-show">
    <h1>Detail Catatan Hasil Pembahasan</h1>

    <table class="data-table">
        <tr>
            <th>Nomor</th>
            <td>{{ $catatan->no }}</td>
        </tr>
        <tr>
            <th>Kegiatan</th>
            <td>{{ $catatan->kegiatan }}</td>
        </tr>
        <tr>
            <th>Tempat</th>
            <td>{{ $catatan->tempat }}</td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td>{{ $catatan->tggl }}</td>
        </tr>
        <tr>
            <th>Waktu Pelaksanaan</th>
            <td>{{ $catatan->waktuLaksana }}</td>
        </tr>
        <tr>
            <th>Agenda</th>
            <td>{{ $catatan->agenda }}</td>
        </tr>
        <tr>
            <th>Nomor Perbup</th>
            <td>{{ $catatan->noPerbup }}</td>
        </tr>
        <tr>
            <th>Nama Kasi</th>
            <td>{{ $catatan->namaKasi }}</td>
        </tr>
        <tr>
            <th>Jabatan Kasi</th>
            <td>{{ $catatan->jbtnKasi }}</td>
        </tr>
        <tr>
            <th>Nomor DPA</th>
            <td>{{ $catatan->noDpa }}</td>
        </tr>
        <tr>
            <th>Tanggal DPA</th>
            <td>{{ $catatan->tgglDpa }}</td>
        </tr>
    </table>

    <a href="{{ route('CatatanHasilSwa.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
