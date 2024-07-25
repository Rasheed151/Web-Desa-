@extends('layouts.show')

@section('content')
<div class="container">
    <h1>Detail Data Penyedia</h1>
    <table class="data-table">
        <tr>
            <th>Nama</th>
            <td>{{ $penyedia->nama }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $penyedia->gender }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $penyedia->ttl }}</td>
        </tr>
        <tr>
            <th>NIK</th>
            <td>{{ $penyedia->NIK }}</td>
        </tr>
        <tr>
            <th>Alamat Rumah</th>
            <td>{{ $penyedia->alamat_rumah }}</td>
        </tr>
        <tr>
            <th>Nama Toko</th>
            <td>{{ $penyedia->nama_toko }}</td>
        </tr>
        <tr>
            <th>Alamat Toko</th>
            <td>{{ $penyedia->alamat_toko }}</td>
        </tr>
        <tr>
            <th>NPWP</th>
            <td>{{ $penyedia->npwp }}</td>
        </tr>
        <tr>
            <th>NIB</th>
            <td>{{ $penyedia->nib }}</td>
        </tr>
    </table>
    <a href="{{ route('penyedia.index') }}" class="btn-secondary">Kembali</a>
</div>
@endsection
