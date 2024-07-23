@extends('layouts')

@section('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container-show {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4e73df;
            margin-bottom: 20px;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }
        .data-table th, .data-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .data-table th {
            background-color: #4e73df;
            color: white;
        }
        .btn-secondary {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6c757d;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
@endsection

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
        <a href="{{ route('dataAparat.index') }}" class="btn-secondary">Kembali</a>
    </div>
@endsection
