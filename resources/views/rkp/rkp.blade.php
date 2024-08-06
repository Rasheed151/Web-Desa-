@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Data RKPD</h1>

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
            <form action="{{ route('rkp.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="no" class="form-label">Nomor:</label>
                    <input type="number" name="no" class="form-control" required placeholder="Nomor">
                </div>

                <div class="mb-3">
                    <label for="TBL" class="form-label">Tanggal Bulan Tahun:</label>
                    <input type="date" name="TBL" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="bidang" class="form-label">Bidang:</label>
                    <input type="text" name="bidang" class="form-control" required placeholder="Bidang">
                </div>

                <div class="mb-3">
                    <label for="subBidang" class="form-label">Sub Bidang:</label>
                    <input type="text" name="subBidang" class="form-control" required placeholder="Sub Bidang">
                </div>

                <div class="mb-3">
                    <label for="jnsKegiatan" class="form-label">Jenis Kegiatan:</label>
                    <input type="text" name="jnsKegiatan" class="form-control" required placeholder="Jenis Kegiatan">
                </div>

                <div class="mb-3">
                    <label for="lksKegiatan" class="form-label">Lokasi Kegiatan:</label>
                    <input type="text" name="lksKegiatan" class="form-control" required placeholder="Lokasi Kegiatan">
                </div>

                <div class="mb-3">
                    <label for="volume" class="form-label">Volume:</label>
                    <input type="text" name="volume" class="form-control" required placeholder="Volume">
                </div>

                <div class="mb-3">
                    <label for="sasaran" class="form-label">Sasaran/Penerima Manfaat:</label>
                    <input type="text" name="sasaran" class="form-control" required placeholder="Sasaran/Penerima Manfaat">
                </div>

                <div class="mb-3">
                    <label for="wktuPelaksanaan" class="form-label">Waktu Pelaksanaan:</label>
                    <input type="text" name="wktuPelaksanaan" class="form-control" required placeholder="Waktu Pelaksanaan">
                </div>

                <div class="mb-3">
                    <label for="jmlhBiaya" class="form-label">Jumlah Biaya:</label>
                    <input type="number" step="0.01" name="jmlhBiaya" class="form-control" required placeholder="Jumlah Biaya">
                </div>

                <div class="mb-3">
                    <label for="smbrBiaya" class="form-label">Sumber Biaya:</label>
                    <input type="text" name="smbrBiaya" class="form-control" required placeholder="Sumber Biaya">
                </div>

                <div class="mb-3">
                    <label for="swakelola" class="form-label">Swakelola:</label>
                    <input type="hidden" name="swakelola" value="0">
                    <input type="checkbox" name="swakelola" class="form-check-input" value="1">
                </div>
                <div class="mb-3">
                    <label for="krjsmaAndes" class="form-label">Kerjasama Antar Desa:</label>
                    <input type="hidden" name="krjsmaAndes" value="0">
                    <input type="checkbox" name="krjsmaAndes" class="form-check-input" value="1">
                </div>
                <div class="mb-3">
                    <label for="krjsmaPitig" class="form-label">Kerjasama Pihak Ketiga:</label>
                    <input type="hidden" name="krjsmaPitig" value="0">
                    <input type="checkbox" name="krjsmaPitig" class="form-check-input" value="1">
                </div>

                <div class="mb-3">
                    <label for="rncnaPegiat" class="form-label">Rencana Pelaksana Kegiatan:</label>
                    <input type="text" name="rncnaPegiat" class="form-control" required placeholder="Rencana Pelaksana Kegiatan">
                </div>

                <button type="submit" class="btn btn-primary">Masukan Data</button>
            </form>
        </div>
    </div>

@endsection

