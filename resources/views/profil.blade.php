@extends('layouts.custom')

@section('style')
<!-- Add your custom styles here -->
<style>
    .satu {
        text-align: center;
        margin: 20px;
        display: flex;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 2%;
        background-color:  #2c7e9e;
    }

    .satu img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        cursor: pointer;
        transition: transform 0.3s;
        margin-left: 40px;
    }

    .satu img:hover {
        transform: scale(1.5);
    }

    .satu h1 {
        margin-top: 3%;
        margin-left: 5%;
    }

    .dua h1 {
        margin-left: 2%;
    }

    .table-dua {
        text-align: center;
        margin: 20px;
        display: flex;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 2%;
    }

    .table-dua th, .table-dua td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        border-radius: 20px;
    }

    .table-dua th {
        background-color: #4e73df;
        color: white;
        border-radius: 20px;
        text-align: center;
    }

    .container-tiga {
        width: 100%;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
    }

    .head-tiga {
        background-color: #4e73df;
        color: white;
        padding: 10px;
        display: flex;
        justify-content: space-around;
        position: relative;
        height: 1%;
    }

    .head-tiga h1 {
        margin: 0;
        position: relative;
        padding: 10px;
        cursor: pointer;
        transition: color 0.3s ease;
        overflow: hidden; /* Menyembunyikan overflow pada pseudo-element */
    }

    .head-tiga h1::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.2); /* Background putih dengan transparansi */
        transform: scaleX(0); /* Menyembunyikan background secara default */
        transform-origin: bottom right; /* Titik awal transformasi */
        transition: transform 0.3s ease; /* Animasi transisi */
    }

    .head-tiga h1.active::before {
        transform: scaleX(1); /* Memperlihatkan background dengan lebar penuh */
        transform-origin: bottom left; /* Titik awal transformasi berpindah ke kiri */
    }

    .content-tiga {
        padding: 20px;
        background-color: #f8f9fa;
        display: none; /* Menyembunyikan konten secara default */
    }

    .content-tiga.active {
        display: block; /* Menampilkan konten yang aktif */
    }

    .table-tiga {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table-tiga th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .table-tiga th {
        background-color: #f2f2f2;
        font-weight: bold;
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
  }
  
  .btn-primary:hover {
    background-color: #3b5bbf;
    border-color: #3b5bbf;
  }
</style>
@endsection

@section('content')
<div class="satu">
    <img src="{{ asset('img/profil.webp') }}" alt="Profile Picture">
    <!-- Display data from $dataUmum -->
    @foreach ($dataUmum as $item)
        <h1>{{ $item->desa }}</h1>
    @endforeach
</div>

<div class="dua">
    <h1>Detail Data Umum</h1>
    <table class="table-dua">
        @foreach ($dataUmum as $data)
            <tr>
                <th>Desa</th>
                <td>{{ $data->desa }}</td>
            </tr>
            <tr>
                <th>Kecamatan</th>
                <td>{{ $data->kecamatan }}</td>
            </tr>
            <tr>
                <th>Kabupaten</th>
                <td>{{ $data->kabupaten }}</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>{{ $data->provinsi }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $data->alamat }}</td>
            </tr>
            <tr>
                <th>NPWP</th>
                <td>{{ $data->npwp }}</td>
            </tr>
            <tr>
                <th>Kode Desa</th>
                <td>{{ $data->kodeDesa }}</td>
            </tr>
            <tr>
                <th>Kepala Desa</th>
                <td>{{ $data->kepalaDesa }}</td>
            </tr>
            <tr>
                <th>No Perbub PJB</th>
                <td>{{ $data->noPerbubPjb }}</td>
            </tr>
            <tr>
                <th>Tanggal Perbub PJB</th>
                <td>{{ $data->tanggalPerbubPjb }}</td>
            </tr>
            <tr>
                <th>No Keputusan DPA</th>
                <td>{{ $data->noKeputusanDpa }}</td>
            </tr>
            <tr>
                <th>Tanggal Keputusan DPA</th>
                <td>{{ $data->tanggalKeputusanDpa }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $data->email }}</td>
            </tr>
        @endforeach
    </table>
</div>

<div class="container-tiga">
    <div class="head-tiga">
        <h1 onclick="tombol(0)" id="title1">Data Aparat</h1>
        <h1 onclick="tombol(1)" id="title2">PKA</h1>
        <h1 onclick="tombol(2)" id="title3">Tim Pelaksana Kegiatan</h1>
        <h1 onclick="tombol(3)" id="title4">Data Penyedia</h1>
    </div>

    <div class="content-tiga" id="content1">
        <table class="table-tiga">
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
                @if(isset($dataAparat) && count($dataAparat) > 0)
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
                                <a href="{{ route('dataAparat.edit', $aparat->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('dataAparat.destroy', $aparat->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="10" class="no-data">Tidak ada data aparat</td>
                    </tr>
                @endif
            </tbody>
            <button class="btn-primary" href="/dataAparat">Tambahkan Data</button>
        </table>
    </div>

    <div class="content-tiga" id="content2">
    <table class="table-tiga">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>NIK</th>
                <th>Jabatan</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>NPWP</th>
                <th>No SK PKA</th>
                <th>Tanggal SK PKA</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($pka) && count($pka) > 0)
                @foreach ($pka as $data)
                    <tr>
                        <td>{{ $data->nomor }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->ttl }}</td>
                        <td>{{ $data->NIK }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>{{ $data->noHp }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->npwp }}</td>
                        <td>{{ $data->noSkPka }}</td>
                        <td>{{ $data->tanggalSkPka }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('pka.edit', $data->id) }}">Edit</a>
                            <form action="{{ route('pka.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
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
    <button class="btn-primary" >Tambahkan Data</button>
</div>

    <div class="content-tiga" id="content3">
    <table class="table-tiga">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>NIK</th>
                    <th>No HP</th>
                    <th>No SK TPK</th>
                    <th>Tanggal SK TPK</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($dataTpk) && count($dataTpk) > 0)
                @foreach ($dataTpk as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->ttl }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->NIK }}</td>
                        <td>{{ $data->noHp }}</td>
                        <td>{{ $data->noSkTpk }}</td>
                        <td>{{ $data->tanggalSkTpk }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>
                            <form action="{{ route('tpk.destroy', $data->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('tpk.edit', $data->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="10" class="no-data">Tidak ada data aparat</td>
                    </tr>
                @endif
            </tbody>
            <button class="btn-primary" href="tpk">Tambahkan Data</button>
        </table>
    </div>
    <div class="content-tiga" id="content4">
    <table class="table-tiga">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tanggal Lahir</th>
                    <th>NIK</th>
                    <th>Alamat Rumah</th>
                    <th>Nama Toko</th>
                    <th>Alamat Toko</th>
                    <th>NPWP</th>
                    <th>NIB</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($penyedia) && count($penyedia) > 0)
                @foreach ($penyedia as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->ttl }}</td>
                        <td>{{ $item->NIK }}</td>
                        <td>{{ $item->alamat_rumah }}</td>
                        <td>{{ $item->nama_toko }}</td>
                        <td>{{ $item->alamat_toko }}</td>
                        <td>{{ $item->npwp }}</td>
                        <td>{{ $item->nib }}</td>
                        <td>
                            <form action="{{ route('penyedia.destroy', $item->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('penyedia.edit', $item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="10" class="no-data">Tidak ada data aparat</td>
                    </tr>
                @endif
            </tbody>
            <button class="btn-primary" href="penyedia">Tambahkan Data</button>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function tombol(index) {
        document.querySelectorAll('.content-tiga, .head-tiga h1').forEach((el, i) => {
            if (i < 4) {
                el.classList.toggle('active', i === index);
            } else {
                el.classList.toggle('active', i - 4 === index);
            }
        });
    }
</script>
@endsection
