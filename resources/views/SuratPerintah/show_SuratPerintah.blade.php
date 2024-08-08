@extends('layouts.show')

@section('content')
<div class="container-show">
    <h1>Detail Surat Perintah</h1>

    <table class="data-table">
        <tr>
            <th>Nomor</th>
            <td>{{ $suratPerintah->no }}</td>
        </tr>
        <tr>
            <th>Nomor SPK</th>
            <td>{{ $suratPerintah->noSpk }}</td>
        </tr>
        <tr>
            <th>Tanggal SPK</th>
            <td>{{ $suratPerintah->tgglSpk }}</td>
        </tr>
        <tr>
            <th>Nama PKA</th>
            <td>{{ $suratPerintah->namaPka }}</td>
        </tr>
        <tr>
            <th>Jabatan PKA</th>
            <td>{{ $suratPerintah->jbtnPka }}</td>
        </tr>
        <tr>
            <th>Nama Penyedia</th>
            <td>{{ $suratPerintah->namaPenyedia }}</td>
        </tr>
        <tr>
            <th>Nama Toko</th>
            <td>{{ $suratPerintah->namaToko }}</td>
        </tr>
        <tr>
            <th>Nomor SPL</th>
            <td>{{ $suratPerintah->noSpl }}</td>
        </tr>
        <tr>
            <th>Tanggal SPL</th>
            <td>{{ $suratPerintah->tgglSpl }}</td>
        </tr>
        <tr>
            <th>Nomor BA</th>
            <td>{{ $suratPerintah->noBa }}</td>
        </tr>
        <tr>
            <th>Tanggal BA</th>
            <td>{{ $suratPerintah->tgglBa }}</td>
        </tr>
        <tr>
            <th>Sumber Dana</th>
            <td>{{ $suratPerintah->smbrDana }}</td>
        </tr>
        <tr>
            <th>Kegiatan</th>
            <td>{{ $suratPerintah->kegiatan }}</td>
        </tr>
        <tr>
            <th>SBSR</th>
            <td>{{ $suratPerintah->sbsr }}</td>
        </tr>
        <tr>
            <th>Jenis Kontrak</th>
            <td>{{ $suratPerintah->jnsKontrak }}</td>
        </tr>
        <tr>
            <th>Waktu Pelaksanaan</th>
            <td>{{ $suratPerintah->wktuLaksana }}</td>
        </tr>
    </table>

    <a href="{{ route('suratPerintah.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
