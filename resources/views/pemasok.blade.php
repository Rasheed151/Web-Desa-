@extends('layouts')
@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Create Data Pemasok</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap :</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
        <label for="gender" class="form-label">Jenis Kelamin :</label>
        <select name="gender" class="form-control" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

        <div class="mb-3">
            <label for="ttl" class="form-label">Tempat/Tanggal Lahir :</label>
            <input type="text" name="ttl" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="NIK" class="form-label">NIK :</label>
            <input type="number" name="NIK" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat :</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="nama_toko" class="form-label">Nama Perusahaan/Toko :</label>
            <input type="number" name="nama_toko" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alamat_toko" class="form-label">Alamat Perusahaan/Toko :</label>
            <input type="number" name="alamat_toko" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No. Telepon :</label>
            <input type="number" name="no_hp" class="form-control">
        </div>

        <div class="mb-3">
            <label for="npwp" class="form-label">NPWP :</label>
            <input type="text" name="npwp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nib" class="form-label">Nomor Induk Berusaha :</label>
            <input type="text" name="nib" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Data Umum</button>
    </form>
</div>

@endsection
