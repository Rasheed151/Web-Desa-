@extends('layouts.custom')
@section('style')
<style>
.satu {
  width: 100%; /* Lebar kontainer adalah 100% dari lebar elemen induknya */
  padding: 0 10px; /* Padding tambahan jika diperlukan */
}

.title {
  display: flex; /* Mengaktifkan Flexbox pada elemen */
  justify-content: center; /* Mengatur item di dalam Flexbox ke tengah secara horizontal */
  align-items: center; /* Mengatur item di dalam Flexbox ke tengah secara vertikal */
  padding-top: 10px; /* Jarak antara konten dan border bawah */
  padding-bottom: 15px; /* Jarak antara konten dan border bawah */
  width: 90%; /* Lebar elemen adalah 90% dari lebar kontainer induknya */
  border-bottom: 2px solid #000; /* Border bawah dengan ketebalan 2px dan warna hitam */
  margin: 0 auto; /* Mengatur margin auto untuk memastikan elemen berada di tengah secara horizontal */
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
        <h1>Berita Acara</h1>
    </div>
</div>

<div class="content-tiga" id="content2">
    <table class="table-tiga">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Tanggal</th>
                <th>Kegiatan</th>
                <th>Ketua BPD</th>
                <th>Wakil Masyarakat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($beritaAcara) && count($beritaAcara) > 0)
                @foreach ($beritaAcara as $data)
                    <tr>
                        <td>{{ $data->no }}</td>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->bahasKegiatan }}</td>
                        <td>{{ $data->ketuaBpd }}</td>
                        <td>{{ $data->wklMasyarakat }}</td>
                        <td>
                            <a href="{{ route('beritaAcara.show', $data->id) }}" class="btn">
                                <img src="/img/info.png" alt="Info" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Edit Button -->
                            <a href="{{ route('beritaAcara.edit', $data->id) }}" class="btn">
                            <img src="/img/edit.png" alt="Edit" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('beritaAcara.destroy', $data->id) }}" method="POST" style="display:inline;">
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
                    <td colspan="11" class="no-data">Tidak ada data PKA</td>
                </tr>
            @endif
        </tbody>
    </table>
    <a class="btn-primary">Tambahkan Data</a>
</div>
@endsection
@section('script')

@endsection