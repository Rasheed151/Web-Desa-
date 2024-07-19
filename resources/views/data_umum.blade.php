@extends('layouts')
@section('content')

                <div class="row">
                    @if(isset($jumlahLaporan))
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><h3>Jumlah Data</h3></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <p class="small text-white stretched-link" href="#">{{ $jumlahLaporan }}</p>
                                <div class="small text-white"></div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

<div class="container mt-5">
    <h1 class="mb-4">Create Data Umum</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tempat_desa" class="form-label">Tempat Desa:</label>
            <input type="text" name="tempat_desa" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alamat_kantor" class="form-label">Alamat Kantor:</label>
            <textarea name="alamat_kantor" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="npwp" class="form-label">NPWP:</label>
            <input type="text" name="npwp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kode_desa" class="form-label">Kode Desa:</label>
            <input type="number" name="kode_desa" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="kepala_desa" class="form-label">Kepala Desa:</label>
            <input type="text" name="kepala_desa" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="no_perbub_pjb" class="form-label">No Perbub PJB:</label>
            <input type="number" name="no_perbub_pjb" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_perbub_pjb" class="form-label">Tanggal Perbub PJB:</label>
            <input type="date" name="tanggal_perbub_pjb" class="form-control">
        </div>

        <div class="mb-3">
            <label for="no_keputusan_dpa" class="form-label">No Keputusan DPA:</label>
            <input type="number" name="no_keputusan_dpa" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_keputusan_dpa" class="form-label">Tanggal Keputusan DPA:</label>
            <input type="date" name="tanggal_keputusan_dpa" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Data Umum</button>
    </form>
</div>

@endsection
