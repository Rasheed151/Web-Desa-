@extends('layouts.edit')

@section('content')
<h1 class="mb-4">Edit Data Aparat</h1>

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container">
        <form action="{{ route('dataAparat.update', $dataAparat->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nomor" class="form-label">Nomor:</label>
                <input type="number" name="nomor" class="form-control" value="{{ $dataAparat->nomor }}" required>
            </div>

            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ $dataAparat->nama_lengkap }}" required>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <input type="text" name="gender" class="form-control" value="{{ $dataAparat->gender }}" required>
            </div>

            <div class="mb-3">
                <label for="ttl" class="form-label">Tempat, Tanggal Lahir:</label>
                <input type="text" name="ttl" class="form-control" value="{{ $dataAparat->ttl }}" required>
            </div>

            <div class="mb-3">
                <label for="NIK" class="form-label">NIK:</label>
                <input type="number" name="NIK" class="form-control" value="{{ $dataAparat->NIK }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea name="alamat" class="form-control" rows="3" required>{{ $dataAparat->alamat }}</textarea>
            </div>

            <div class="mb-3">
                <label for="npwp" class="form-label">NPWP:</label>
                <input type="number" name="npwp" class="form-control" value="{{ $dataAparat->npwp }}" required>
            </div>

            <div class="mb-3">
                <label for="noHp" class="form-label">No HP:</label>
                <input type="number" name="noHp" class="form-control" value="{{ $dataAparat->noHp }}" required>
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" value="{{ $dataAparat->jabatan }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
            <a href="{{ route('tes.index') }}" class="btn-back">Kembali</a>
            
        </form>
    </div>
</div>
@endsection
