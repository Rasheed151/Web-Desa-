@extends('layouts.show')

@section('content')
<div class="container-show">
    <h1>Detail KakSwa</h1>

    <table class="data-table">
        <tr>
            <th>Nomor</th>
            <td>{{ $kak->no }}</td>
        </tr>
        <tr>
            <th>Latar Belakang</th>
            <td>{{ $kak->ltrBelakang }}</td>
        </tr>
        <tr>
            <th>Nama Penerima Manfaat</th>
            <td>{{ $kak->nerimaManfaat }}</td>
        </tr>
        <tr>
            <th>Cara Pelaksanaan</th>
            <td>{{ $kak->caraLaksana }}</td>
        </tr>
        <tr>
            <th>Ketua TPK</th>
            <td>{{ $kak->ketuaTpk }}</td>
        </tr>
        <tr>
            <th>Sekretaris TPK</th>
            <td>{{ $kak->sekTpk }}</td>
        </tr>
        <tr>
            <th>Anggota TPK</th>
            <td>{{ $kak->angTpk }}</td>
        </tr>
        <tr>
            <th>Nama Kasi</th>
            <td>{{ $kak->namaKasi }}</td>
        </tr>
        <tr>
            <th>Jabatan Kasi</th>
            <td>{{ $kak->jbtnKasi }}</td>
        </tr>
        <tr>
            <th>Lokasi</th>
            <td>{{ $kak->diLokasi }}</td>
        </tr>
        <tr>
            <th>Tanggal Mulai</th>
            <td>{{ $kak->tgglMulai }}</td>
        </tr>
        <tr>
            <th>Jangka Waktu</th>
            <td>{{ $kak->jangkaWaktu }}</td>
        </tr>
        <tr>
            <th>Biaya Kegiatan</th>
            <td>{{ $kak->biayaKegiatan }}</td>
        </tr>
        <tr>
            <th>Sumber Dana</th>
            <td>{{ $kak->smbrDana }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $kak->sebesarRp }}</td>
        </tr>
    </table>

    <a href="{{ route('KakSwa.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
