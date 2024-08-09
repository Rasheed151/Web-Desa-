@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Berita Acara</h1>

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
        <form action="{{ route('kakSedia.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="noKeg" class="form-label">No. :</label>
                <input type="number" name="noKeg" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="ltrBelakang" class="form-label">Latar Belakang :</label>
                <textarea name="ltrBelakang" class="form-control" rows="3" placeholder="Type here.."></textarea>
            </div>

            <div class="mb-3">
                <label for="nerimaManfaat" class="form-label">Penerima Manfaat :</label>
                <input type="text" name="nerimaManfaat" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="caraLaksana" class="form-label">Cara Melaksanakan :</label>
                <input type="text" name="caraLaksana" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="ketuaTpk" class="form-label">Ketua TPK :</label>
                <input type="text" name="ketuaTpk" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="sekTpk" class="form-label">Sekretaris TPK :</label>
                <input type="text" name="sekTpk" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="angTpk" class="form-label">Anggota TPK :</label>
                <input type="text" name="angTpk" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="namaKasi" class="form-label">Nama Kepala Seksi:</label>
                <input type="text" name="namaKasi" class="form-control" placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="jbtnKasi" class="form-label">Jabatan Kepala Seksi:</label>
                <input type="text" name="jbtnKasi" class="form-control" placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="dilokasi" class="form-label">Diserahterimakan oleh :</label>
                <input type="text" name="dilokasi" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="tgglMulai" class="form-label">Tanggal Mulai :</label>
                <input type="date" name="tgglMulai" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jangkaWaktu" class="form-label">Jangka Waktu :</label>
                <input type="text" name="jangkaWaktu" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="biayaKegiatan" class="form-label">Biaya Kegiatan :</label>
                <input type="text" name="biayaKegiatan" class="form-control" required placeholder="Type here..">
            </div>

            <div class="mb-3">
                <label for="sebesarRp" class="form-label">Sebesar Rp :</label>
                <input type="number" name="sebesarRp" class="form-control" required placeholder="Type here..">
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
        <a href="{{ route('kakSedia.index') }}" class= "btn-back">Kembali</a>
    </div>
</div>

@endsection

