@extends('layouts')
@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Create Data Pelaksana Kegiatan Anggaran</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/saveAs" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap :</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="ttl" class="form-label">Tempat/Tanggal Lahir :</label>
            <input type="text" name="ttl" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK :</label>
            <input type="number" name="nik" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan :</label>
            <input type="text" name="jabatan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No. HP :</label>
            <input type="number" name="no_hp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat :</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Data Umum</button>
    </form>
</div>

@endsection