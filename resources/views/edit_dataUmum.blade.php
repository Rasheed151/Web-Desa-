@extends('layouts')

@section('styles')
<style>

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
}

.form-control:focus {
    border-color: #4e73df;
    box-shadow: 0 0 8px rgba(78, 115, 223, 0.2);
}

.btn-primary {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4e73df;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #3b5cb8;
}

</style>
@endsection

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
            <label for="tempatDesa">Tempat Desa</label>
            <input type="text" class="form-control" id="tempatDesa" name="tempatDesa" value="{{ $dataUmum->tempatDesa }}" required>
        </div>
        <div class="form-group">
            <label for="alamatKantor">Alamat Kantor</label>
            <input type="text" class="form-control" id="alamatKantor" name="alamatKantor" value="{{ $dataUmum->alamatKantor }}" required>
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
