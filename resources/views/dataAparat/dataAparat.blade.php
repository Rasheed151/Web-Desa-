@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Data Aparat</h1>

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
        <form action="{{ route('dataAparat.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nomor" class="form-label">Nomor:</label>
                <input type="number" name="nomor" class="form-control" required placeholder="Nomor">
            </div>

            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                <input type="text" name="nama_lengkap" class="form-control" required placeholder="Nama Lengkap">
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
                <label for="NIK" class="form-label">NIK:</label>
                <input type="number" name="NIK" class="form-control" required placeholder="NIK">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea name="alamat" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="npwp" class="form-label">NPWP:</label>
                <input type="number" name="npwp" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="noHp" class="form-label">No HP:</label>
                <input type="number" name="noHp" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" name="jabatan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>

<h1 class="mb-4">Data Aparat</h1>

<div class="container-show">
    @if ($dataAparat->isEmpty())
        <p class="no-data">No data available.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Lengkap</th>
                    <th>Gender</th>
                    <th>TTL</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>NPWP</th>
                    <th>No HP</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataAparat as $aparat)
                <tr>
                    <td>{{ $aparat->nomor }}</td>
                    <td>{{ $aparat->nama_lengkap }}</td>
                    <td>{{ $aparat->gender }}</td>
                    <td>{{ $aparat->ttl }}</td>
                    <td>{{ $aparat->NIK }}</td>
                    <td>{{ $aparat->alamat }}</td>
                    <td>{{ $aparat->npwp }}</td>
                    <td>{{ $aparat->noHp }}</td>
                    <td>{{ $aparat->jabatan }}</td>
                    <td>
                        <a href="{{ route('dataAparat.show', $aparat->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('dataAparat.edit', $aparat->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('dataAparat.destroy', $aparat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

