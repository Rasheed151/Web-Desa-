@extends('layouts.edit')

@section('content')

<h1 class="mb-4">Edit Berita Acara</h1>
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

    <form action="{{ route('beritaAcara.update', $beritaAcara->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="no" class="form-label">Nomor:</label>
            <input type="number" name="no" class="form-control" value="{{ $beritaAcara->no }}" required>
        </div>

        <div class="form-group">
            <label for="date" class="form-label">Tanggal:</label>
            <input type="date" name="date" class="form-control" value="{{ $beritaAcara->date }}" required>
        </div>

        <div class="form-group">
            <label for="jam" class="form-label">Jam:</label>
            <input type="time" name="jam" class="form-control" value="{{ $beritaAcara->jam }}" required>
        </div>

        <div class="form-group">
            <label for="tempat" class="form-label">Tempat:</label>
            <input type="text" name="tempat" class="form-control" value="{{ $beritaAcara->tempat }}" required>
        </div>

        <div class="form-group">
            <label for="bahasKegiatan" class="form-label">Bahas Kegiatan:</label>
            <textarea name="bahasKegiatan" class="form-control" rows="3" required>{{ $beritaAcara->bahasKegiatan }}</textarea>
        </div>

        <div class="form-group">
            <label for="ketuaBpd" class="form-label">Ketua BPD:</label>
            <input type="text" name="ketuaBpd" class="form-control" value="{{ $beritaAcara->ketuaBpd }}" required>
        </div>

        <div class="form-group">
            <label for="wklMasyarakat" class="form-label">Wakil Masyarakat:</label>
            <input type="text" name="wklMasyarakat" class="form-control" value="{{ $beritaAcara->wklMasyarakat }}" required>
        </div>

        <div class="form-group">
            <label for="pimpinanRapat" class="form-label">Pimpinan Rapat:</label>
            <input type="text" name="pimpinanRapat" class="form-control" value="{{ $beritaAcara->pimpinanRapat }}" required>
        </div>

        <div class="form-group">
            <label for="notulen" class="form-label">Notulen:</label>
            <input type="text" name="notulen" class="form-control" value="{{ $beritaAcara->notulen }}" required>
        </div>

        <div class="form-group">
            <label for="ns1" class="form-label">Narasumber 1:</label>
            <input type="text" name="ns1" class="form-control" value="{{ $beritaAcara->ns1 }}">
        </div>

        <div class="form-group">
            <label for="ns1Dari" class="form-label">Narasumber 1 Dari:</label>
            <input type="text" name="ns1Dari" class="form-control" value="{{ $beritaAcara->ns1Dari }}">
        </div>

        <!-- Repeat for other narasumber fields -->

        <div class="form-group">
            <label for="materiPembahasan" class="form-label">Materi Pembahasan:</label>
            <textarea name="materiPembahasan" class="form-control" rows="3" required>{{ $beritaAcara->materiPembahasan }}</textarea>
        </div>

        <div class="form-group">
            <label for="kesepakatanAkhir" class="form-label">Kesepakatan Akhir:</label>
            <textarea name="kesepakatanAkhir" class="form-control" rows="3" required>{{ $beritaAcara->kesepakatanAkhir }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Data</button>

        <a href="{{ route('beritaAcara.index') }}" class= "btn-back">Kembali</a>
    </form>
</div>
@endsection
