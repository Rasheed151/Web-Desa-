@extends('layouts.show')

@section('content')
    <div class="container-show">
        <h1>Detail Data TPK</h1>
        <table class="data-table">
            <tr>
                <th>Nama</th>
                <td>{{ $tpk->nama }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ $tpk->gender }}</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td>{{ $tpk->ttl }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $tpk->alamat }}</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>{{ $tpk->NIK }}</td>
            </tr>
            <tr>
                <th>No HP</th>
                <td>{{ $tpk->noHp }}</td>
            </tr>
            <tr>
                <th>No SK TPK</th>
                <td>{{ $tpk->noSkTpk }}</td>
            </tr>
            <tr>
                <th>Tanggal SK TPK</th>
                <td>{{ $tpk->tanggalSkTpk }}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>{{ $tpk->jabatan }}</td>
            </tr>
        </table>
        <a href="{{ route('tes.index') }}" class="btn-secondary">Kembali</a>
    </div>
@endsection
