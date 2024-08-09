@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Surat Perintah</h1>

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
        <form action="{{ route('suratPerintah.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no" class="form-label">Nomor:</label>
                <input type="number" name="no" class="form-control" required placeholder="Nomor">
            </div>

            <div class="form-group">
                <label for="noSpk" class="form-label">Nomor SPK:</label>
                <input type="number" name="noSpk" class="form-control" required placeholder="Nomor SPK">
            </div>

            <div class="form-group">
                <label for="tgglSpk" class="form-label">Tanggal SPK:</label>
                <input type="date" name="tgglSpk" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="namaPka" class="form-label">Nama PKA:</label>
                <input name="namaPka" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jbtnPka" class="form-label">Jabatan PKA:</label>
                <input name="jbtnPka" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="namaPenyedia" class="form-label">Nama Penyedia:</label>
                <input name="namaPenyedia" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="namaToko" class="form-label">Nama Toko:</label>
                <input name="namaToko" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="noSpl" class="form-label">Nomor SPL:</label>
                <input name="noSpl" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tgglSpl" class="form-label">Tanggal SPL:</label>
                <input type="date" name="tgglSpl" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="noBa" class="form-label">Nomor BA:</label>
                <input name="noBa" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tgglBa" class="form-label">Tanggal BA:</label>
                <input type="date" name="tgglBa" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="smbrDana" class="form-label">Sumber Dana:</label>
                <input name="smbrDana" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="kegiatan" class="form-label">Kegiatan:</label>
                <input name="kegiatan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="sbsr" class="form-label">SBSR:</label>
                <input type="number" name="sbsr" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jnsKontrak" class="form-label">Jenis Kontrak:</label>
                <input name="jnsKontrak" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="wktuLaksana" class="form-label">Waktu Pelaksanaan:</label>
                <input name="wktuLaksana" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>

@endsection
