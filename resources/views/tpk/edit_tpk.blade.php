@extends('layouts.edit')

@section('content')
<h1 class="mb-4">Edit Data TPK</h1>

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
    <form action="{{ route('tpk.update', $tpk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $tpk->nama }}" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="{{ $tpk->gender }}" required>
        </div>
        <div class="form-group">
            <label for="ttl">Tempat, Tanggal Lahir</label>
            <input type="text" class="form-control" id="ttl" name="ttl" value="{{ $tpk->ttl }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ $tpk->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="NIK">NIK</label>
            <input type="number" class="form-control" id="NIK" name="NIK" value="{{ $tpk->NIK }}" required>
        </div>
        <div class="form-group">
            <label for="noHp">No HP</label>
            <input type="number" class="form-control" id="noHp" name="noHp" value="{{ $tpk->noHp }}" required>
        </div>
        <div class="form-group">
            <label for="noSkTpk">No SK TPK</label>
            <input type="number" class="form-control" id="noSkTpk" name="noSkTpk" value="{{ $tpk->noSkTpk }}" required>
        </div>
        <div class="form-group">
            <label for="tanggalSkTpk">Tanggal SK TPK</label>
            <input type="date" class="form-control" id="tanggalSkTpk" name="tanggalSkTpk" value="{{ $tpk->tanggalSkTpk }}">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $tpk->jabatan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('profil.index') }}" class="btn-back">Kembali</a>
    </form>
    </div>
</div>
@endsection