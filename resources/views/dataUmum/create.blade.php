@extends('layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('data-umum.index') }}"> Back</a>
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

    <form action="{{ route('data-umum.store') }}" method="POST">
    @csrf
            <div class="mb-3">
                <label for="tempatDesa" class="form-label">Tempat Desa:</label>
                <input type="text" name="tempatDesa" class="form-control" required="" placeholder="Provinsi,Kabupateb,Kecamatan,Desa">
            </div>

            <div class="mb-3">
                <label for="alamatKantor" class="form-label">Alamat Kantor:</label>
                <textarea name="alamatKantor" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="npwp" class="form-label">NPWP:</label>
                <input type="text" name="npwp" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="kodeDesa" class="form-label">Kode Desa:</label>
                <input type="number" name="kodeDesa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kepalaDesa" class="form-label">Kepala Desa:</label>
                <input type="text" name="kepalaDesa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="noPerbubPjb" class="form-label">No Perbub PJB:</label>
                <input type="number" name="noPerbubPjb" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggalPerbubPjb" class="form-label">Tanggal Perbub PJB:</label>
                <input type="date" name="tanggalPerbubPjb" class="form-control">
            </div>

            <div class="mb-3">
                <label for="noKeputusanDpa" class="form-label">No Keputusan DPA:</label>
                <input type="number" name="noKeputusanDpa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggalKeputusanDpa" class="form-label">Tanggal Keputusan DPA:</label>
                <input type="date" name="tanggalKeputusanDpa" class="form-control">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
    </form>
</div>
@endsection