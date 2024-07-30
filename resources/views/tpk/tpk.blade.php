@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Data TPK</h1>

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
        <form action="{{ route('tpk.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" class="form-control" required placeholder="Nama">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <input type="text" name="gender" class="form-control" required placeholder="Gender">
            </div>

            <div class="mb-3">
                <label for="ttl" class="form-label">Tempat, Tanggal Lahir:</label>
                <input type="text" name="ttl" class="form-control" required placeholder="Tempat, Tanggal Lahir">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea name="alamat" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="NIK" class="form-label">NIK:</label>
                <input type="number" name="NIK" class="form-control" required placeholder="NIK">
            </div>

            <div class="mb-3">
                <label for="noHp" class="form-label">No HP:</label>
                <input type="number" name="noHp" class="form-control" required placeholder="No HP">
            </div>

            <div class="mb-3">
                <label for="noSkTpk" class="form-label">No SK TPK:</label>
                <input type="number" name="noSkTpk" class="form-control" required placeholder="No SK TPK">
            </div>

            <div class="mb-3">
                <label for="tanggalSkTpk" class="form-label">Tanggal SK TPK:</label>
                <input type="date" name="tanggalSkTpk" class="form-control">
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" required placeholder="Jabatan">
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>


@endsection
