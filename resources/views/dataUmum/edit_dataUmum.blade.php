@extends('layouts.edit')

@section('content')
<div class="container">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('dataUmum.index') }}"> Back</a>
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
    <form action="{{ route('dataUmum.update' , $dataUmum->id ) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="desa">Desa</label>
            <input type="text" class="form-control" id="desa" name="desa" value="{{ $dataUmum->desa }}" required>
        </div>
        <div class="form-group">
            <label for="kecamatan">kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $dataUmum->kecamatan }}" required>
        </div>
        <div class="form-group">
            <label for="kabupaten">kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ $dataUmum->kabupaten }}" required>
        </div>
        <div class="form-group">
            <label for="provinsi">provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $dataUmum->provinsi }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat Kantor</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dataUmum->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="npwp">NPWP</label>
            <input type="number" class="form-control" id="npwp" name="npwp" value="{{ $dataUmum->npwp }}" required>
        </div>
        <div class="form-group">
            <label for="kodeDesa">Kode Desa</label>
            <input type="number" class="form-control" id="kodeDesa" name="kodeDesa" value="{{ $dataUmum->kodeDesa }}" required>
        </div>
        <div class="form-group">
            <label for="kepalaDesa">Kepala Desa</label>
            <input type="text" class="form-control" id="kepalaDesa" name="kepalaDesa" value="{{ $dataUmum->kepalaDesa }}" required>
        </div>
        <div class="form-group">
            <label for="noPerbubPjb">No Perbub Pjb</label>
            <input type="number" class="form-control" id="noPerbubPjb" name="noPerbubPjb" value="{{ $dataUmum->noPerbubPjb }}" required>
        </div>
        <div class="form-group">
            <label for="tanggalPerbubPjb">Tanggal Perbub Pjb</label>
            <input type="date" class="form-control" id="tanggalPerbubPjb" name="tanggalPerbubPjb" value="{{ $dataUmum->tanggalPerbubPjb }}" required>
        </div>
        <div class="form-group">
            <label for="noKeputusanDpa">No Keputusan Dpa</label>
            <input type="number" class="form-control" id="noKeputusanDpa" name="noKeputusanDpa" value="{{ $dataUmum->noKeputusanDpa }}" required>
        </div>
        <div class="form-group">
            <label for="tanggalKeputusanDpa">Tanggal Keputusan Dpa</label>
            <input type="date" class="form-control" id="tanggalKeputusanDpa" name="tanggalKeputusanDpa" value="{{ $dataUmum->tanggalKeputusanDpa }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $dataUmum->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
