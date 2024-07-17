@extends('layouts')
@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Create Data Aparatur</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('simpan') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nomor" class="form-label">Nomor :</label>
        <input type="number" name="nomor" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Nama Lengkap :</label>
        <input type="text" name="nama_lengkap" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
        <select name="jenis_kelamin" class="form-control" required>
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
        <label for="kepala_desa" class="form-label">NIK :</label>
        <input type="number" name="kepala_desa" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat Lengkap :</label>
        <textarea name="alamat" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label for="npwp" class="form-label">NPWP :</label>
        <input type="number" name="npwp" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="no_hp" class="form-label">No HP :</label>
        <input type="number" name="no_hp" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan :</label>
        <input type="text" name="jabatan" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Create Data Umum</button>
</form>

</div>

@endsection
