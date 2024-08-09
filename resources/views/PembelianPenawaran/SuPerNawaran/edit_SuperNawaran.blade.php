@extends('layouts.edit')

@section('content')

<h1 class="mb-4">Edit Penawaran Pembelian</h1>
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

  <form action="{{ route('superNawaran.update', $penawaran->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="no" class="form-label">Nomor:</label>
      <input type="number" name="no" class="form-control" value="{{ $penawaran->no }}" required placeholder="Nomor">
    </div>

    <div class="form-group">
      <label for="namaPenawaran" class="form-label">Nama Penawaran:</label>
      <input name="namaPenawaran" class="form-control" value="{{ $penawaran->namaPenawaran }}" required>
    </div>

    <div class="form-group">
      <label for="tglPenawaran" class="form-label">Tanggal Penawaran:</label>
      <input type="date" name="tglPenawaran" class="form-control" value="{{ $penawaran->tglPenawaran }}" required>
    </div>

    <div class="form-group">
      <label for="harga" class="form-label">Harga:</label>
      <input type="number" name="harga" class="form-control" value="{{ $penawaran->harga }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Data</button>
  </form>
</div>
@endsection
