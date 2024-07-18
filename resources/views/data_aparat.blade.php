@extends('layouts')

@section('styles')
<style>
    .container {
        display: flex;
        flex-direction: column; /* Mengatur agar elemen dalam container disusun secara kolom */
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-left: 0;
    }

    h1 {
        color: #333;
        /* margin-bottom: 20px; */
        margin-left: 0; /* Nempel ke kiri */
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
<h1 class="mb-4">Create Data Aparatur</h1>

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

    <form action="{{ route('simpan') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor:</label>
            <input type="number" name="nomor" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="ttl" class="form-label">Tempat/Tanggal Lahir:</label>
            <input type="text" name="ttl" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK:</label>
            <input type="number" name="nik" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Lengkap:</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="npwp" class="form-label">NPWP:</label>
            <input type="number" name="npwp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP:</label>
            <input type="number" name="no_hp" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan:</label>
            <input type="text" name="jabatan" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Data Aparatur</button>
    </form>
</div>
@endsection
