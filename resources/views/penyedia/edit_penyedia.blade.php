@extends('layouts.edit')

@section('content')
<h1 class="mb-4">Create Data Aparat</h1>
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

    <h1>Edit Data Penyedia</h1>
    <form action="{{ route('penyedia.update', $penyedia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $penyedia->nama }}" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="{{ $penyedia->gender }}" required>
        </div>
        <div class="form-group">
            <label for="ttl">Tanggal Lahir</label>
            <input type="text" class="form-control" id="ttl" name="ttl" value="{{ $penyedia->ttl }}" required>
        </div>
        <div class="form-group">
            <label for="NIK">NIK</label>
            <input type="number" class="form-control" id="NIK" name="NIK" value="{{ $penyedia->NIK }}" required>
        </div>
        <div class="form-group">
            <label for="alamat_rumah">Alamat Rumah</label>
            <textarea class="form-control" id="alamat_rumah" name="alamat_rumah" rows="3" required>{{ $penyedia->alamat_rumah }}</textarea>
        </div>
        <div class="form-group">
            <label for="nama_toko">Nama Toko</label>
            <input type="text" class="form-control" id="nama_toko" name="nama_toko" value="{{ $penyedia->nama_toko }}" required>
        </div>
        <div class="form-group">
            <label for="alamat_toko">Alamat Toko</label>
            <textarea class="form-control" id="alamat_toko" name="alamat_toko" rows="3" required>{{ $penyedia->alamat_toko }}</textarea>
        </div>
        <div class="form-group">
            <label for="npwp">NPWP</label>
            <input type="number" class="form-control" id="npwp" name="npwp" value="{{ $penyedia->npwp }}" required>
        </div>
        <div class="form-group">
            <label for="nib">NIB</label>
            <input type="number" class="form-control" id="nib" name="nib" value="{{ $penyedia->nib }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('tes.index') }}" class="btn-back">Kembali</a>
    </form>
</div>
@endsection
