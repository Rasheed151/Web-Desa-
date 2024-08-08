@extends('layouts.edit')

@section('content')

<h1 class="mb-4">Edit Surat Perintah</h1>
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

    <form action="{{ route('suratPerintah.update', $suratPerintah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="no" class="form-label">Nomor:</label>
            <input type="number" name="no" class="form-control" value="{{ $suratPerintah->no }}" required placeholder="Nomor">
        </div>

        <div class="form-group">
            <label for="noSpk" class="form-label">Nomor SPK:</label>
            <input type="number" name="noSpk" class="form-control" value="{{ $suratPerintah->noSpk }}" required placeholder="Nomor SPK">
        </div>

        <div class="form-group">
            <label for="tgglSpk" class="form-label">Tanggal SPK:</label>
            <input type="date" name="tgglSpk" class="form-control" value="{{ $suratPerintah->tgglSpk }}" required>
        </div>

        <div class="form-group">
            <label for="namaPka" class="form-label">Nama PKA:</label>
            <input type="text" name="namaPka" class="form-control" value="{{ $suratPerintah->namaPka }}" required>
        </div>

        <div class="form-group">
            <label for="jbtnPka" class="form-label">Jabatan PKA:</label>
            <input type="text" name="jbtnPka" class="form-control" value="{{ $suratPerintah->jbtnPka }}" required>
        </div>

        <div class="form-group">
            <label for="namaPenyedia" class="form-label">Nama Penyedia:</label>
            <input type="text" name="namaPenyedia" class="form-control" value="{{ $suratPerintah->namaPenyedia }}" required>
        </div>

        <div class="form-group">
            <label for="namaToko" class="form-label">Nama Toko:</label>
            <input type="text" name="namaToko" class="form-control" value="{{ $suratPerintah->namaToko }}" required>
        </div>

        <div class="form-group">
            <label for="noSpl" class="form-label">Nomor SPL:</label>
            <input type="text" name="noSpl" class="form-control" value="{{ $suratPerintah->noSpl }}" required>
        </div>

        <div class="form-group">
            <label for="tgglSpl" class="form-label">Tanggal SPL:</label>
            <input type="date" name="tgglSpl" class="form-control" value="{{ $suratPerintah->tgglSpl }}" required>
        </div>

        <div class="form-group">
            <label for="noBa" class="form-label">Nomor BA:</label>
            <input type="text" name="noBa" class="form-control" value="{{ $suratPerintah->noBa }}" required>
        </div>

        <div class="form-group">
            <label for="tgglBa" class="form-label">Tanggal BA:</label>
            <input type="date" name="tgglBa" class="form-control" value="{{ $suratPerintah->tgglBa }}" required>
        </div>

        <div class="form-group">
            <label for="smbrDana" class="form-label">Sumber Dana:</label>
            <input type="text" name="smbrDana" class="form-control" value="{{ $suratPerintah->smbrDana }}" required>
        </div>

        <div class="form-group">
            <label for="kegiatan" class="form-label">Kegiatan:</label>
            <input type="text" name="kegiatan" class="form-control" value="{{ $suratPerintah->kegiatan }}" required>
        </div>

        <div class="form-group">
            <label for="sbsr" class="form-label">SBSR:</label>
            <input type="number" name="sbsr" class="form-control" value="{{ $suratPerintah->sbsr }}" required>
        </div>

        <div class="form-group">
            <label for="jnsKontrak" class="form-label">Jenis Kontrak:</label>
            <input type="text" name="jnsKontrak" class="form-control" value="{{ $suratPerintah->jnsKontrak }}" required>
        </div>

        <div class="form-group">
            <label for="wktuLaksana" class="form-label">Waktu Pelaksanaan:</label>
            <input type="text" name="wktuLaksana" class="form-control" value="{{ $suratPerintah->wktuLaksana }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="{{ route('suratPerintah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
