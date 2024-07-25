@extends('layouts.edit')

@section('content')
    <div class="container">
        <h1>Edit Pengumuman</h1>

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

        <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="no">Nomor</label>
                <input type="number" class="form-control" id="no" name="no" value="{{ $pengumuman->no }}" required>
            </div>
            <div class="form-group">
                <label for="namaKegiatan">Nama Kegiatan</label>
                <input type="text" class="form-control" id="namaKegiatan" name="namaKegiatan" value="{{ $pengumuman->namaKegiatan }}" required>
            </div>
            <div class="form-group">
                <label for="nilaiPengadaan">Nilai Pengadaan</label>
                <input type="number" class="form-control" id="nilaiPengadaan" name="nilaiPengadaan" value="{{ $pengumuman->nilaiPengadaan }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="caraPengadaan">Cara Pengadaan</label>
                <input type="text" class="form-control" id="caraPengadaan" name="caraPengadaan" value="{{ $pengumuman->caraPengadaan }}" required>
            </div>
            <div class="form-group">
                <label for="volume">Volume</label>
                <input type="text" class="form-control" id="volume" name="volume" value="{{ $pengumuman->volume }}" required>
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $pengumuman->satuan }}" required>
            </div>
            <div class="form-group">
                <label for="namaTpk">Nama TPK</label>
                <input type="text" class="form-control" id="namaTpk" name="namaTpk" value="{{ $pengumuman->namaTpk }}" required>
            </div>
            <div class="form-group">
                <label for="lksKegiatan">Lokasi Kegiatan</label>
                <input type="text" class="form-control" id="lksKegiatan" name="lksKegiatan" value="{{ $pengumuman->lksKegiatan }}" required>
            </div>
            <div class="form-group">
                <label for="tglMulai">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tglMulai" name="tglMulai" value="{{ $pengumuman->tglMulai->format('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="tglSelesai">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tglSelesai" name="tglSelesai" value="{{ $pengumuman->tglSelesai->format('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="jangkaWaktu">Jangka Waktu</label>
                <input type="text" class="form-control" id="jangkaWaktu" name="jangkaWaktu" value="{{ $pengumuman->jangkaWaktu }}" required>
            </div>
            <div class="form-group">
                <label for="wktuPelaksanaan">Waktu Pelaksanaan</label>
                <input type="text" class="form-control" id="wktuPelaksanaan" name="wktuPelaksanaan" value="{{ $pengumuman->wktuPelaksanaan }}" required>
            </div>
            <div class="form-group">
                <label for="tglPengumuman">Tanggal Pengumuman</label>
                <input type="date" class="form-control" id="tglPengumuman" name="tglPengumuman" value="{{ $pengumuman->tglPengumuman->format('Y-m-d') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
