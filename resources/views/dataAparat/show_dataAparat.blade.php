@extends('layouts.show')

@section('content')
    <div class="container-show">
        <h1>Detail Data Aparat</h1>
        <table class="data-table">
            <tr>
                <th>Nomor</th>
                <td>{{ $dataAparat->nomor }}</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $dataAparat->nama_lengkap }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ $dataAparat->gender }}</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{{ $dataAparat->ttl }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>{{ $dataAparat->NIK }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $dataAparat->alamat }}</td>
            </tr>
            <tr>
                <th>NPWP</th>
                <td>{{ $dataAparat->npwp }}</td>
            </tr>
            <tr>
                <th>No HP</th>
                <td>{{ $dataAparat->noHp }}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>{{ $dataAparat->jabatan }}</td>
            </tr>
        </table>
        <a href="{{ route('tes.index') }}" class="btn-secondary">Kembali</a>
    </div>
@endsection
