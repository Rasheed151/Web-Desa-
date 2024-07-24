@extends('layouts.edit')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tpk.index') }}"> Back</a>
            </div>
        </div>
    </div>

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

    <h1>Edit Data</h1>
    <form action="{{ route('tpk.update' , $tpk->id ) }}" method="POST">
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
    </form>
</div>
@endsection