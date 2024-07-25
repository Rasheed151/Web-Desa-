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
                    <input type="checkbox" name="swakelola" class="form-check-input">
                </div>

                <div class="mb-3">
                    <label for="krjsmaAndes" class="form-label">Kerjasama Antar Desa:</label>
                    <input type="checkbox" name="krjsmaAndes" class="form-check-input">
                </div>

                <div class="mb-3">
                    <label for="krjsmaPitig" class="form-label">Kerjasama Pihak Ketiga:</label>
                    <input type="checkbox" name="krjsmaPitig" class="form-check-input">
                </div>

                <div class="mb-3">
                    <label for="rncnaPegiat" class="form-label">Rencana Pelaksana Kegiatan:</label>
                    <input type="text" name="rncnaPegiat" class="form-control" required placeholder="Rencana Pelaksana Kegiatan">
                </div>

                <button type="submit" class="btn btn-primary">Masukan Data</button>
            </form>
        </div>
    </div>

    <h1 class="mb-4">Data RKPD</h1>

    <div class="container-show">
        @if ($rkps->isEmpty())
            <p>No data available.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Bidang</th>
                        <th>Sub Bidang</th>
                        <th>Jenis Kegiatan</th>
                        <th>Lokasi Kegiatan</th>
                        <th>Volume</th>
                        <th>Sasaran</th>
                        <th>Waktu Pelaksanaan</th>
                        <th>Jumlah Biaya</th>
                        <th>Sumber Biaya</th>
                        <th>Swakelola</th>
                        <th>Kerjasama Antar Desa</th>
                        <th>Kerjasama Pihak Ketiga</th>
                        <th>Rencana Pelaksana Kegiatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rkps as $rkp)
                        <tr>
                            <td>{{ $rkp->no }}</td>
                            <td>{{ $rkp->TBL }}</td>
                            <td>{{ $rkp->bidang }}</td>
                            <td>{{ $rkp->subBidang }}</td>
                            <td>{{ $rkp->jnsKegiatan }}</td>
                            <td>{{ $rkp->lksKegiatan }}</td>
                            <td>{{ $rkp->volume }}</td>
                            <td>{{ $rkp->sasaran }}</td>
                            <td>{{ $rkp->wktuPelaksanaan }}</td>
                            <td>{{ $rkp->jmlhBiaya }}</td>
                            <td>{{ $rkp->smbrBiaya }}</td>
                            <td>{{ $rkp->swakelola ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $rkp->krjsmaAndes ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $rkp->krjsmaPitig ? 'Ya' : 'Tidak' }}</td>
                            <td>{{ $rkp->rncnaPegiat }}</td>
                            <td>
                                <a href="{{ route('rkp.show', $rkp->id) }}" class="btn btn-info">Lihat</a>
                                <a href="{{ route('rkp.edit', $rkp->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('rkp.destroy', $rkp->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

