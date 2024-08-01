@extends('layouts.show')

@section('content')
<div class="container-show">
    <h1>Detail Data RKPD</h1>
    <table class="data-table">
        <tr>
            <th>Nomor</th>
            <td>{{ $rkp->no }}</td>
        </tr>
        <tr>
            <th>Tanggal Bulan Tahun</th>
            <td>{{ $rkp->TBL }}</td>
        </tr>
        <tr>
            <th>Bidang</th>
            <td>{{ $rkp->bidang }}</td>
        </tr>
        <tr>
            <th>Sub Bidang</th>
            <td>{{ $rkp->subBidang }}</td>
        </tr>
        <tr>
            <th>Jenis Kegiatan</th>
            <td>{{ $rkp->jnsKegiatan }}</td>
        </tr>
        <tr>
            <th>Lokasi Kegiatan</th>
            <td>{{ $rkp->lksKegiatan }}</td>
        </tr>
        <tr>
            <th>Volume</th>
            <td>{{ $rkp->volume }}</td>
        </tr>
        <tr>
            <th>Sasaran/Penerima Manfaat</th>
            <td>{{ $rkp->sasaran }}</td>
        </tr>
        <tr>
            <th>Waktu Pelaksanaan</th>
            <td>{{ $rkp->wktuPelaksanaan }}</td>
        </tr>
        <tr>
            <th>Jumlah Biaya</th>
            <td>{{ $rkp->jmlhBiaya }}</td>
        </tr>
        <tr>
            <th>Sumber Biaya</th>
            <td>{{ $rkp->smbrBiaya }}</td>
        </tr>
        <tr>
            <th>Swakelola</th>
            <td>{{ $rkp->swakelola ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <th>Kerjasama Antar Desa</th>
            <td>{{ $rkp->krjsmaAndes ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <th>Kerjasama Pihak Ketiga</th>
            <td>{{ $rkp->krjsmaPitig ? 'Ya' : 'Tidak' }}</td>
        </tr>
        <tr>
            <th>Rencana Pelaksana Kegiatan</th>
            <td>{{ $rkp->rncnaPegiat }}</td>
        </tr>
    </table>

    <a href="{{ route('rkp.index') }}" class="btn-secondary">Kembali</a>
</div>
@endsection
