@extends('layouts.show')

@section('content')
<div class="container-show">
    <h1>Detail Jadwal Pelaksanaan</h1>

    <table class="data-table">
        <tr>
            <th>Nomor</th>
            <td>{{ $jadwal->no }}</td>
        </tr>
        <tr>
            <th>Kegiatan</th>
            <td>{{ $jadwal->namaKegiatan }}</td>
        </tr>
        <tr>
            <th>Ketua TPK</th>
            <td>{{ $jadwal->ketuaTpk }}</td>
        </tr>
        <tr>
            <th>Sekretaris TPK</th>
            <td>{{ $jadwal->sekTpk }}</td>
        </tr>
        <tr>
            <th>Anggota TPK</th>
            <td>{{ $jadwal->angTpk }}</td>
        </tr>
        <tr>
            <th>Jumlah Waktu</th>
            <td>{{ $jadwal->jmlhWaktu }}</td>
        </tr>
        <tr>
            <th>Waktu Pelaksanaan (dari)</th>
            <td>{{ $jadwal->wktLaksanaDari }}</td>
        </tr>
        <tr>
            <th>Waktu Pelaksanaan (sampai)</th>
            <td>{{ $jadwal->wktLaksanaSampai }}</td>
        </tr>
        <tr>
            <th>Nilai Pekerjaan</th>
            <td>{{ $jadwal->nlaiPekerjaan }}</td>
        </tr>
        <tr>
            <th>Nama Kepala Seksi 1</th>
            <td>{{ $jadwal->namaKasi }}</td>
        </tr>
        <tr>
            <th>Jabatan Kepala Seksi</th>
            <td>{{ $jadwal->jbtnKasi }}</td>
        </tr>
        <!-- Repeat for other narasumber fields -->
        <tr>
            <th>Lokasi</th>
            <td>{{ $jadwal->lokasi }}</td>
        </tr>
    </table>

    <a href="{{ route('jadwalSedia.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
