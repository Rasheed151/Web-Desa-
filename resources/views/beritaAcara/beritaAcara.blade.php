@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Berita Acara</h1>

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
        <form action="{{ route('beritaAcara.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="no" class="form-label">Nomor:</label>
                <input type="number" name="no" class="form-control" required placeholder="Nomor">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Tanggal:</label>
                <input type="date" name="date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jam" class="form-label">Jam:</label>
                <input type="time" name="jam" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tempat" class="form-label">Tempat:</label>
                <input type="text" name="tempat" class="form-control" required placeholder="Tempat">
            </div>

            <div class="mb-3">
                <label for="bahasKegiatan" class="form-label">Bahas Kegiatan:</label>
                <textarea name="bahasKegiatan" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="ketuaBpd" class="form-label">Ketua BPD:</label>
                <input type="text" name="ketuaBpd" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="wklMasyarakat" class="form-label">Wakil Masyarakat:</label>
                <input type="text" name="wklMasyarakat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="pimpinanRapat" class="form-label">Pimpinan Rapat:</label>
                <input type="text" name="pimpinanRapat" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="notulen" class="form-label">Notulen:</label>
                <input type="text" name="notulen" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="ns1" class="form-label">Narasumber 1:</label>
                <input type="text" name="ns1" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ns1Dari" class="form-label">Narasumber 1 Dari:</label>
                <input type="text" name="ns1Dari" class="form-control">
            </div>

            <!-- Repeat for other narasumber fields -->

            <div class="mb-3">
                <label for="materiPembahasan" class="form-label">Materi Pembahasan:</label>
                <textarea name="materiPembahasan" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="kesepakatanAkhir" class="form-label">Kesepakatan Akhir:</label>
                <textarea name="kesepakatanAkhir" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>

@endsection