@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Penyedia</h1>

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container">
        <form action="{{ route('penyedia.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <input type="text" name="gender" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ttl" class="form-label">Tanggal Lahir:</label>
                <input type="text" name="ttl" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="NIK" class="form-label">NIK:</label>
                <input type="number" name="NIK" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alamat_rumah" class="form-label">Alamat Rumah:</label>
                <textarea name="alamat_rumah" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="nama_toko" class="form-label">Nama Toko:</label>
                <input type="text" name="nama_toko" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alamat_toko" class="form-label">Alamat Toko:</label>
                <textarea name="alamat_toko" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="npwp" class="form-label">NPWP:</label>
                <input type="number" name="npwp" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nib" class="form-label">NIB:</label>
                <input type="number" name="nib" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>
@endsection