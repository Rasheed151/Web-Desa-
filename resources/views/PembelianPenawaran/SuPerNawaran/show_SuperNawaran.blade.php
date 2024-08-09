@extends('layouts.show')

@section('content')

<h1 class="mb-4">Detail Penawaran Pembelian</h1>
<div class="container">
  <div class="detail-container">
    <div class="detail-row">
      <label class="detail-label">Nomor:</label>
      <span class="detail-value">{{ $penawaran->no }}</span>
    </div>

    <div class="detail-row">
      <label class="detail-label">Nama Penawaran:</label>
      <span class="detail-value">{{ $penawaran->namaPenawaran }}</span>
    </div>

    <div class="detail-row">
      <label class="detail-label">Tanggal Penawaran:</label>
      <span class="detail-value">{{ $penawaran->tglPenawaran }}</span>
    </div>

    <div class="detail-row">
      <label class="detail-label">Harga:</label>
      <span class="detail-value">{{ $penawaran->harga }}</span>
    </div>
  </div>
</div>
@endsection
