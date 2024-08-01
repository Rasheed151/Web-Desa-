@extends('layouts.edit')

@section('content')
<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Edit Data RKPD</h1>
    <form action="{{ route('rkp.update', $rkp->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="no">Nomor</label>
            <input type="number" class="form-control" id="no" name="no" value="{{ $rkp->no }}" required>
        </div>
        <div class="form-group">
            <label for="TBL">Tanggal Bulan Tahun</label>
            <input type="date" class="form-control" id="TBL" name="TBL" value="{{ $rkp->TBL }}" required>
        </div>
        <div class="form-group">
            <label for="bidang">Bidang</label>
            <input type="text" class="form-control" id="bidang" name="bidang" value="{{ $rkp->bidang }}" required>
        </div>
        <div class="form-group">
            <label for="subBidang">Sub Bidang</label>
            <input type="text" class="form-control" id="subBidang" name="subBidang" value="{{ $rkp->subBidang }}" required>
        </div>
        <div class="form-group">
            <label for="jnsKegiatan">Jenis Kegiatan</label>
            <input type="text" class="form-control" id="jnsKegiatan" name="jnsKegiatan" value="{{ $rkp->jnsKegiatan }}" required>
        </div>
        <div class="form-group">
            <label for="lksKegiatan">Lokasi Kegiatan</label>
            <input type="text" class="form-control" id="lksKegiatan" name="lksKegiatan" value="{{ $rkp->lksKegiatan }}" required>
        </div>
        <div class="form-group">
            <label for="volume">Volume</label>
            <input type="text" class="form-control" id="volume" name="volume" value="{{ $rkp->volume }}" required>
        </div>
        <div class="form-group">
            <label for="sasaran">Sasaran/Penerima Manfaat</label>
            <input type="text" class="form-control" id="sasaran" name="sasaran" value="{{ $rkp->sasaran }}" required>
        </div>
        <div class="form-group">
            <label for="wktuPelaksanaan">Waktu Pelaksanaan</label>
            <input type="text" class="form-control" id="wktuPelaksanaan" name="wktuPelaksanaan" value="{{ $rkp->wktuPelaksanaan }}" required>
        </div>
        <div class="form-group">
            <label for="jmlhBiaya">Jumlah Biaya</label>
            <input type="number" step="0.01" class="form-control" id="jmlhBiaya" name="jmlhBiaya" value="{{ $rkp->jmlhBiaya }}" required>
        </div>
        <div class="form-group">
            <label for="smbrBiaya">Sumber Biaya</label>
            <input type="text" class="form-control" id="smbrBiaya" name="smbrBiaya" value="{{ $rkp->smbrBiaya }}" required>
        </div>
        <div class="form-group">
            <label for="swakelola">Swakelola</label>
            <input type="checkbox" class="form-check-input" id="swakelola" name="swakelola" {{ $rkp->swakelola ? 'checked' : '' }}>
        </div>
        <div class="form-group">
            <label for="krjsmaAndes">Kerjasama Antar Desa</label>
            <input type="checkbox" class="form-check-input" id="krjsmaAndes" name="krjsmaAndes" {{ $rkp->krjsmaAndes ? 'checked' : '' }}>
        </div>
        <div class="form-group">
            <label for="krjsmaPitig">Kerjasama Pihak Ketiga</label>
            <input type="checkbox" class="form-check-input" id="krjsmaPitig" name="krjsmaPitig" {{ $rkp->krjsmaPitig ? 'checked' : '' }}>
        </div>
        <div class="form-group">
            <label for="rncnaPegiat">Rencana Pelaksana Kegiatan</label>
            <input type="text" class="form-control" id="rncnaPegiat" name="rncnaPegiat" value="{{ $rkp->rncnaPegiat }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn-back" href="{{ route('rkp.index') }}"> Kembali</a>
    </form>
</div>
@endsection
