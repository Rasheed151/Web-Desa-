@extends('layouts.show')

@section('content')
    <div class="container">
        <h1>Detail Pengumuman</h1>

        <table class="data-table">
            <tr>
                <th>Nomor</th>
                <td>{{ $pengumuman->no }}</td>
            </tr>
            <tr>
                <th>Nama Kegiatan</th>
                <td>{{ $pengumuman->namaKegiatan }}</td>
            </tr>
            <tr>
                <th>Nilai Pengadaan</th>
                <td>{{ $pengumuman->nilaiPengadaan }}</td>
            </tr>
            <tr>
                <th>Cara Pengadaan</th>
                <td>{{ $pengumuman->caraPengadaan }}</td>
            </tr>
            <tr>
                <th>Volume</th>
                <td>{{ $pengumuman->volume }}</td>
            </tr>
            <tr>
                <th>Satuan</th>
                <td>{{ $pengumuman->satuan }}</td>
            </tr>
            <tr>
                <th>Nama TPK</th>
                <td>{{ $pengumuman->namaTpk }}</td>
            </tr>
            <tr>
                <th>Lokasi Kegiatan</th>
                <td>{{ $pengumuman->lksKegiatan }}</td>
            </tr>
            <tr>
                <th>Tanggal Mulai</th>
                <td>{{ $pengumuman->tglMulai }}</td>
            </tr>
            <tr>
                <th>Tanggal Selesai</th>
                <td>{{ $pengumuman->tglSelesai }}</td>
            </tr>
            <tr>
                <th>Jangka Waktu</th>
                <td>{{ $pengumuman->jangkaWaktu }}</td>
            </tr>
            <tr>
                <th>Waktu Pelaksanaan</th>
                <td>{{ $pengumuman->wktuPelaksanaan }}</td>
            </tr>
            <tr>
                <th>Tanggal Pengumuman</th>
                <td>{{ $pengumuman->tglPengumuman }}</td>
            </tr>
        </table>

        <a href="{{ route('pengumuman.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
