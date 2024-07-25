@extends('layouts.show')

@section('content')
<div class="container">
    <h1>Detail Berita Acara</h1>

    <table class="data-table">
        <tr>
            <th>Nomor</th>
            <td>{{ $beritaAcara->no }}</td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td>{{ $beritaAcara->date }}</td>
        </tr>
        <tr>
            <th>Jam</th>
            <td>{{ $beritaAcara->jam }}</td>
        </tr>
        <tr>
            <th>Tempat</th>
            <td>{{ $beritaAcara->tempat }}</td>
        </tr>
        <tr>
            <th>Bahas Kegiatan</th>
            <td>{{ $beritaAcara->bahasKegiatan }}</td>
        </tr>
        <tr>
            <th>Ketua BPD</th>
            <td>{{ $beritaAcara->ketuaBpd }}</td>
        </tr>
        <tr>
            <th>Wakil Masyarakat</th>
            <td>{{ $beritaAcara->wklMasyarakat }}</td>
        </tr>
        <tr>
            <th>Pimpinan Rapat</th>
            <td>{{ $beritaAcara->pimpinanRapat }}</td>
        </tr>
        <tr>
            <th>Notulen</th>
            <td>{{ $beritaAcara->notulen }}</td>
        </tr>
        <tr>
            <th>Narasumber 1</th>
            <td>{{ $beritaAcara->ns1 }}</td>
        </tr>
        <tr>
            <th>Narasumber 1 Dari</th>
            <td>{{ $beritaAcara->ns1Dari }}</td>
        </tr>
        <!-- Repeat for other narasumber fields -->
        <tr>
            <th>Materi Pembahasan</th>
            <td>{{ $beritaAcara->materiPembahasan }}</td>
        </tr>
        <tr>
            <th>Kesepakatan Akhir</th>
            <td>{{ $beritaAcara->kesepakatanAkhir }}</td>
        </tr>
    </table>

    <a href="{{ route('beritaAcara.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
