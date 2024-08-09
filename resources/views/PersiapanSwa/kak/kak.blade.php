@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create KAK Swakelola</h1>

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
        <form action="{{ route('kakSwa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no" class="form-label">Nomor:</label>
                <input type="number" name="no" class="form-control" required placeholder="Nomor">
            </div>

            <div class="form-group">
                <label for="ltrBelakang" class="form-label">Surat Tugas:</label>
                <input type="text" name="ltrBelakang" class="form-control" required placeholder="Surat Tugas">
            </div>

            <div class="form-group">
                <label for="nerimaManfaat" class="form-label">Penerima Manfaat:</label>
                <input type="text" name="nerimaManfaat" class="form-control" required placeholder="Penerima Manfaat">
            </div>

            <div class="form-group">
                <label for="caraLaksana" class="form-label">Cara Pelaksanaan:</label>
                <input type="text" name="caraLaksana" class="form-control" required placeholder="Cara Pelaksanaan">
            </div>

            <div class="form-group">
                <label for="ketuaTpk" class="form-label">Ketua TPK:</label>
                <input type="text" name="ketuaTpk" class="form-control" required placeholder="Ketua TPK">
            </div>

            <div class="form-group">
                <label for="sekTpk" class="form-label">Sekretaris TPK:</label>
                <input type="text" name="sekTpk" class="form-control" required placeholder="Sekretaris TPK">
            </div>

            <div class="form-group">
                <label for="angTpk" class="form-label">Anggota TPK:</label>
                <input type="text" name="angTpk" class="form-control" required placeholder="Anggota TPK">
            </div>

            <div class="form-group">
                <label for="namaKasi" class="form-label">Nama Kasi:</label>
                <input type="text" name="namaKasi" class="form-control" required placeholder="Nama Kasi">
            </div>

            <div class="form-group">
                <label for="jbtnKasi" class="form-label">Jabatan Kasi:</label>
                <input type="text" name="jbtnKasi" class="form-control" required placeholder="Jabatan Kasi">
            </div>

            <div class="form-group">
                <label for="diLokasi" class="form-label">Di Lokasi:</label>
                <input type="text" name="diLokasi" class="form-control" required placeholder="Di Lokasi">
            </div>

            <div class="form-group">
                <label for="tgglMulai" class="form-label">Tanggal Mulai:</label>
                <input type="date" name="tgglMulai" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jangkaWaktu" class="form-label">Jangka Waktu:</label>
                <input type="text" name="jangkaWaktu" class="form-control" required placeholder="Jangka Waktu">
            </div>

            <div class="form-group">
                <label for="biayaKegiatan" class="form-label">Biaya Kegiatan:</label>
                <input type="text" name="biayaKegiatan" class="form-control" required placeholder="Biaya Kegiatan">
            </div>

            <div class="form-group">
                <label for="sebesarRp" class="form-label">Sebesar (Rp):</label>
                <input type="number" name="sebesarRp" class="form-control" required placeholder="Sebesar (Rp)">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
</div>

@endsection
