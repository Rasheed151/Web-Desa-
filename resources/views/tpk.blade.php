@extends('layouts')
@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Create Data Umum</h1>

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
            <label for="alamat" class="form-label">Alamat :</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="NIK" class="form-label">NIK :</label>
            <input type="number" name="NIK" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No. HP :</label>
            <input type="number" name="no_hp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="no_sk_tpk" class="form-label">No. SK Kades Penetapan TPK :</label>
            <input type="number" name="no_sk_tpk" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_sk_tpk" class="form-label">Tanggal SK Kades Penetapan TPK:</label>
            <input type="date" name="tanggal_sk_tpk" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create Data Umum</button>
    </form>
</div>

@endsection
