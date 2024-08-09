@extends('layouts.app')

@section('content')
<h1 class="mb-4">Buat Penawaran Pembelian Baru</h1>

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
    <form action="{{ route('superNawaran.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="no" class="form-label">Nomor:</label>
        <input type="number" name="no" class="form-control" required placeholder="Nomor">
      </div>

      <div class="form-group">
        <label for="namaPenawaran" class="form-label">Nama Penawaran:</label>
        <input name="namaPenawaran" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="tglPenawaran" class="form-label">Tanggal Penawaran:</label>
        <input type="date" name="tglPenawaran" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="harga" class="form-label">Harga:</label>
        <input type="number" name="harga" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
  </div>
</div>
@endsection
