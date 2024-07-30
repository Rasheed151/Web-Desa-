@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Data PKA</h1>

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
        <form action="{{ route('pka.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nomor" class="form-label">Nomor:</label>
                <input type="number" name="nomor" class="form-control" required placeholder="Nomor">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" class="form-control" required placeholder="Nama">
            </div>

            <div class="mb-3">
                <label for="ttl" class="form-label">TTL:</label>
                <input type="text" name="ttl" class="form-control" required placeholder="TTL">
            </div>

            <div class="mb-3">
                <label for="NIK" class="form-label">NIK:</label>
                <input type="number" name="NIK" class="form-control" required placeholder="NIK">
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" required placeholder="Jabatan">
            </div>

            <div class="mb-3">
                <label for="noHp" class="form-label">No HP:</label>
                <input type="number" name="noHp" class="form-control" required placeholder="No HP">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea name="alamat" class="form-control" rows="3" required placeholder="Alamat"></textarea>
            </div>

            <div class="mb-3">
                <label for="npwp" class="form-label">NPWP:</label>
                <input type="number" name="npwp" class="form-control" required placeholder="NPWP">
            </div>

            <div class="mb-3">
                <label for="noSkPka" class="form-label">No SK PKA:</label>
                <input type="number" name="noSkPka" class="form-control" required placeholder="No SK PKA">
            </div>

            <div class="mb-3">
                <label for="tanggalSkPka" class="form-label">Tanggal SK PKA:</label>
                <input type="date" name="tanggalSkPka" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>

@endsection
