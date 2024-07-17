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
    }

    h1 {
        color: #333;
        /* margin-bottom: 20px; */
        margin-left: 0;
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

    @media (max-width: 768px) {
        .form-label, .form-control {
            font-size: 14px;
        }

        .btn-primary {
            font-size: 16px;
        }
    }
</style>
@endsection

@section('content')
<h1 class="mb-4">Create Data Umum</h1>

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
</div>
@endsection
