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

/* No Data Message */
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
        <h1>Catatan Hasil Pembahasan Swakelola</h1>
    </div>
</div>

<div class="content-tiga" id="content2">
    <table class="table-tiga">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kegiatan</th>
                <th>Tempat</th>
                <th>Tanggal</th>
                <th>Agenda</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($catatan) && count($catatan) > 0)
                @foreach ($catatan as $data)
                    <tr>
                        <td>{{ $data->no }}</td>
                        <td>{{ $data->kegiatan }}</td>
                        <td>{{ $data->tempat }}</td>
                        <td>{{ $data->tggl->format('d-m-Y') }}</td>
                        <td>{{ $data->agenda }}</td>
                        <td>
                            <a href="{{ route('catatanHasil.show', $data->id) }}" class="btn">
                                <img src="/img/info.png" alt="Info" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Edit Button -->
                            <a href="{{ route('catatanHasil.edit', $data->id) }}" class="btn">
                            <img src="/img/edit.png" alt="Edit" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('catatanHasil.destroy', $data->id) }}" method="POST" style="display:inline;">
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
                    <td colspan="6" class="no-data">Tidak ada data Catatan Hasil</td>
                </tr>
            @endif
        </tbody>
    </table>
    <a class="btn-primary">Tambahkan Data</a>
</div>
@endsection

@section('script')
@endsection
