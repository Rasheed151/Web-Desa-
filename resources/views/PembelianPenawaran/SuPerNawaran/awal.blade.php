@extends('layouts.custom')

@section('style')
<style>
.satu {
  width: 100%;
  padding: 0 10px;
}

.title {
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 10px;
  padding-bottom: 15px;
  width: 90%;
  border-bottom: 2px solid #000;
  margin: 0 auto;
}

.content-tiga {
  padding: 20px;
  background-color: #f8f9fa;
}

.table-tiga {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.table-tiga th, .table-tiga td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

.table-tiga th {
  background-color: #2c7e9e;
  font-weight: bold;
  color: #fff;
}

.table-tiga td {
  background-color: #fff;
}

.no-data {
  margin-top: 20px;
  text-align: center;
  font-style: italic;
  color: #888;
}

.btn-primary {
  background-color: #4e73df;
  border-color: #4e73df;
  padding: 10px 20px;
  font-size: 18px;
  border-radius: 5px;
  cursor: pointer;
  color: #fff;
  text-decoration: none;
  display: inline-block;
  margin-top: 20px;
}

.btn-primary:hover {
  background-color: #3b5bbf;
  border-color: #3b5bbf;
}
</style>
@endsection

@section('content')
<div class="satu">
  <div class="title">
    <h1>Daftar Penawaran Pembelian</h1>
  </div>
</div>

<div class="content-tiga" id="content2">
  <table class="table-tiga">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Nama Penawaran</th>
        <th>Tanggal Penawaran</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @if(isset($penawaran) && count($penawaran) > 0)
        @foreach ($penawaran as $data)
          <tr>
            <td>{{ $data->no }}</td>
            <td>{{ $data->namaPenawaran }}</td>
            <td>{{ $data->tglPenawaran }}</td>
            <td>{{ $data->harga }}</td>
            <td>
              <a href="{{ route('superNawaran.show', $data->id) }}" class="btn">
                <img src="/img/info.png" alt="Info" style="width:24px; height:24px; border: none; background: none;">
              </a>
              <a href="{{ route('superNawaran.edit', $data->id) }}" class="btn">
                <img src="/img/edit.png" alt="Edit" style="width:24px; height:24px; border: none; background: none;">
              </a>
              <form action="{{ route('superNawaran.destroy', $data->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="background: none; border: none; padding: 0;">
                  <img src="/img/delete.png" alt="Delete" style="width:24px; height:24px;">
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      @else
        <tr>
          <td colspan="5" class="no-data">Tidak ada data penawaran</td>
        </tr>
      @endif
    </tbody>
  </table>
  <a href="{{ route('superNawaran.create') }}" class="btn-primary">Tambahkan Data</a>
</div>
@endsection

@section('script')
@endsection
