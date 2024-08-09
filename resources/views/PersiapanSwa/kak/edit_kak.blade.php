@extends('layouts.edit')

@section('content')

<h1 class="mb-4">Edit KAK Swakelola</h1>
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

    <form action="{{ route('kakSwa.update', $kakSwa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="no" class="form-label">Nomor:</label>
            <input type="number" name="no" class="form-control" value="{{ $kakSwa->no }}" required placeholder="Nomor">
        </div>

        <div class="form-group">
            <label for="ltrBelakang" class="form-label">Surat Tugas:</label>
            <input type="text" name="ltrBelakang" class="form-control" value="{{ $kakSwa->ltrBelakang }}" required placeholder="Surat Tugas">
        </div>

        <div class="form-group">
            <label for="nerimaManfaat" class="form-label">Penerima Manfaat:</label>
            <input type="text" name="nerimaManfaat" class="form-control" value="{{ $kakSwa->nerimaManfaat }}" required placeholder="Penerima Manfaat">
        </div>

        <div class="form-group">
            <label for="caraLaksana" class="form-label">Cara Pelaksanaan:</label>
            <input type="text" name="caraLaksana" class="form-control" value="{{ $kakSwa->caraLaksana }}" required placeholder="Cara Pelaksanaan">
        </div>

        <div class="form-group">
            <label for="ketuaTpk" class="form-label">Ketua TPK:</label>
            <input type="text" name="ketuaTpk" class="form-control" value="{{ $kakSwa->ketuaTpk }}" required placeholder="Ketua TPK">
        </div>

        <div class="form-group">
            <label for="sekTpk" class="form-label">Sekretaris TPK:</label>
            <input type="text" name="sekTpk" class="form-control" value="{{ $kakSwa->sekTpk }}" required placeholder="Sekretaris TPK">
        </div>

        <div class="form-group">
            <label for="angTpk" class="form-label">Anggota TPK:</label>
            <input type="text" name="angTpk" class="form-control" value="{{ $kakSwa->angTpk }}" required placeholder="Anggota TPK">
        </div>

        <div class="form-group">
            <label for="namaKasi" class="form-label">Nama Kasi:</label>
            <input type="text" name="namaKasi" class="form-control" value="{{ $kakSwa->namaKasi }}" required placeholder="Nama Kasi">
        </div>

        <div class="form-group">
            <label for="jbtnKasi" class="form-label">Jabatan Kasi:</label>
            <input type="text" name="jbtnKasi" class="form-control" value="{{ $kakSwa->jbtnKasi }}" required placeholder="Jabatan Kasi">
        </div>

        <div class="form-group">
            <label for="diLokasi" class="form-label">Di Lokasi:</label>
            <input type="text" name="diLokasi" class="form-control" value="{{ $kakSwa->diLokasi }}" required placeholder="Di Lokasi">
        </div>

        <div class="form-group">
            <label for="tgglMulai" class="form-label">Tanggal Mulai:</label>
            <input type="date" name="tgglMulai" class="form-control" value="{{ $kakSwa->tgglMulai }}" required>
        </div>

        <div class="form-group">
            <label for="jangkaWaktu" class="form-label">Jangka Waktu:</label>
            <input type="text" name="jangkaWaktu" class="form-control" value="{{ $kakSwa->jangkaWaktu }}" required placeholder="Jangka Waktu">
        </div>

        <div class="form-group">
            <label for="biayaKegiatan" class="form-label">Biaya Kegiatan:</label>
            <input type="text" name="biayaKegiatan" class="form-control" value="{{ $kakSwa->biayaKegiatan }}" required placeholder="Biaya Kegiatan">
        </div>

        <div class="form-group">
            <label for="sebesarRp" class="form-label">Sebesar (Rp):</label>
            <input type="number" name="sebesarRp" class="form-control" value="{{ $kakSwa->sebesarRp }}" required placeholder="Sebesar (Rp)">
        </div>

        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="{{ route('kakSwa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
