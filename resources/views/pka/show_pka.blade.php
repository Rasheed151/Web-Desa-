@extends('layouts.show')

@section('content')
    <div class="container-show">
        <h1>Detail Data PKA</h1>
        <table class="data-table">
            <tr>
                <th>Nomor</th>
                <td>{{ $pka->nomor }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $pka->nama }}</td>
            </tr>
            <tr>
                <th>TTL</th>
                <td>{{ $pka->ttl }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>{{ $pka->NIK }}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>{{ $pka->jabatan }}</td>
            </tr>
            <tr>
                <th>No HP</th>
                <td>{{ $pka->noHp }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $pka->alamat }}</td>
            </tr>
            <tr>
                <th>NPWP</th>
                <td>{{ $pka->npwp }}</td>
            </tr>
            <tr>
                <th>No SK PKA</th>
                <td>{{ $pka->noSkPka }}</td>
            </tr>
            <tr>
                <th>Tanggal SK PKA</th>
                <td>{{ $pka->tanggalSkPka }}</td>
            </tr>
        </table>
        <a href="{{ route('profil.index') }}" class="btn-secondary">Kembali</a>
    </div>
@endsection
