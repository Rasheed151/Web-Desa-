@extends('layouts')

@section('styles')
<style>
        .container {
        display: flex;
        justify-content: flex-start;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-left: 0;
        width: auto;
    }

    h1 {
        color: #333;
        /* margin-bottom: 20px; */
        margin-right: 70%;
    }

    .alert-danger {
        margin-bottom: 20px;
    }

    .alert-danger ul {
        margin: 0;
        padding-left: 20px;
    }

    .alert-danger li {
        list-style-type: disc;
    }

    .form-label {
        font-weight: bold;
        color: #4e73df;
    }

    .form-control {
        width: 100%;
        box-sizing: border-box;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-top: 5px;
    }

    .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 5px rgba(78, 115, 223, 0.5);
    }

    .mb-3 {
        margin-bottom: 20px;
    }

    .form-container {
        width: 100%;
        margin: 0;
    }

    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #3b5bbf;
        border-color: #3b5bbf;
    }

    .container-show {
        margin-top: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    /* Table */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .table td {
        background-color: #fff;
    }

    /* No Data Message */
    .no-data {
        margin-top: 20px;
        text-align: center;
        font-style: italic;
        color: #888;
    }
</style>
@endsection

@section('content')
<h1 class="mb-4">Edit Data Umum</h1>

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

    <div class="form-container">
        <form action="{{ route('update', $data->kode_desa) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tempat_desa" class="form-label">Tempat Desa:</label>
                <input type="text" name="tempat_desa" class="form-control" value="{{ $data->tempat_desa }}" required>
            </div>

            <div class="mb-3">
                <label for="alamat_kantor" class="form-label">Alamat Kantor:</label>
                <textarea name="alamat_kantor" class="form-control" rows="3" required>{{ $data->alamat_kantor }}</textarea>
            </div>

            <div class="mb-3">
                <label for="npwp" class="form-label">NPWP:</label>
                <input type="text" name="npwp" class="form-control" value="{{ $data->npwp }}" required>
            </div>

            <div class="mb-3">
                <label for="kode_desa" class="form-label">Kode Desa:</label>
                <input type="number" name="kode_desa" class="form-control" value="{{ $data->kode_desa }}" required>
            </div>

            <div class="mb-3">
                <label for="kepala_desa" class="form-label">Kepala Desa:</label>
                <input type="text" name="kepala_desa" class="form-control" value="{{ $data->kepala_desa }}" required>
            </div>

            <div class="mb-3">
                <label for="no_perbub_pjb" class="form-label">No Perbub PJB:</label>
                <input type="number" name="no_perbub_pjb" class="form-control" value="{{ $data->no_perbub_pjb }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_perbub_pjb" class="form-label">Tanggal Perbub PJB:</label>
                <input type="date" name="tanggal_perbub_pjb" class="form-control" value="{{ $data->tanggal_perbub_pjb }}">
            </div>

            <div class="mb-3">
                <label for="no_keputusan_dpa" class="form-label">No Keputusan DPA:</label>
                <input type="number" name="no_keputusan_dpa" class="form-control" value="{{ $data->no_keputusan_dpa }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_keputusan_dpa" class="form-label">Tanggal Keputusan DPA:</label>
                <input type="date" name="tanggal_keputusan_dpa" class="form-control" value="{{ $data->tanggal_keputusan_dpa }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $data->email }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</div>
@endsection
