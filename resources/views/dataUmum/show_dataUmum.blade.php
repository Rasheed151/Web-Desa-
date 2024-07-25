@extends('layouts.show')

@section('content')
    <div class="container">
        <h1>Detail Data Umum</h1>
        <table class="data-table">
            <tr>
                <th>Desa</th>
                <td>{{ $dataUmum->desa }}</td>
            </tr>
            <tr>
                <th>Kecamatan</th>
                <td>{{ $dataUmum->kecamatan }}</td>
            </tr>
            <tr>
                <th>Kabupaten</th>
                <td>{{ $dataUmum->kabupaten }}</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>{{ $dataUmum->provinsi }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $dataUmum->alamat }}</td>
            </tr>
            <tr>
                <th>NPWP</th>
                <td>{{ $dataUmum->npwp }}</td>
            </tr>
            <tr>
                <th>Kode Desa</th>
                <td>{{ $dataUmum->kodeDesa }}</td>
            </tr>
            <tr>
                <th>Kepala Desa</th>
                <td>{{ $dataUmum->kepalaDesa }}</td>
            </tr>
            <tr>
                <th>No Perbub Pjb</th>
                <td>{{ $dataUmum->noPerbubPjb }}</td>
            </tr>
            <tr>
                <th>Tanggal Perbub Pjb</th>
                <td>{{ $dataUmum->tanggalPerbubPjb }}</td>
            </tr>
            <tr>
                <th>No Keputusan Dpa</th>
                <td>{{ $dataUmum->noKeputusanDpa }}</td>
            </tr>
            <tr>
                <th>Tanggal Keputusan Dpa</th>
                <td>{{ $dataUmum->tanggalKeputusanDpa }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $dataUmum->email }}</td>
            </tr>
        </table>
        <a href="{{ route('dataUmum.index') }}" class="btn-secondary">Kembali</a>
    </div>
@endsection
