@extends('layouts.edit')

@section('content')
<h2 class="mb-4">Edit Data PKA</h2>
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

    <h1>Edit Data PKA</h1>
    <form action="{{ route('pka.update', $pka->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomor">Nomor</label>
            <input type="number" class="form-control" id="nomor" name="nomor" value="{{ $pka->nomor }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pka->nama }}" required>
        </div>
        <div class="form-group">
            <label for="ttl">TTL</label>
            <input type="text" class="form-control" id="ttl" name="ttl" value="{{ $pka->ttl }}" required>
        </div>
        <div class="form-group">
            <label for="NIK">NIK</label>
            <input type="number" class="form-control" id="NIK" name="NIK" value="{{ $pka->NIK }}" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $pka->jabatan }}" required>
        </div>
        <div class="form-group">
            <label for="noHp">No HP</label>
            <input type="text" class="form-control" id="noHp" name="noHp" value="{{ $pka->noHp }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $pka->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="npwp">NPWP</label>
            <input type="number" class="form-control" id="npwp" name="npwp" value="{{ $pka->npwp }}" required>
        </div>
        <div class="form-group">
            <label for="noSkPka">No SK PKA</label>
            <input type="number" class="form-control" id="noSkPka" name="noSkPka" value="{{ $pka->noSkPka }}" required>
        </div>
        <div class="form-group">
            <label for="tanggalSkPka">Tanggal SK PKA</label>
            <input type="date" class="form-control" id="tanggalSkPka" name="tanggalSkPka" value="{{ $pka->tanggalSkPka }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="{{ route('tes.index') }}" class="btn-back">Kembali</a>
    </form>
</div>
@endsection
