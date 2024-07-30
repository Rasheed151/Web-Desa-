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

    .table-tiga th, .table-tiga td {
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
    color: #fff;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
  }
  
  
  .btn-primary:hover {
    background-color: #3b5bbf;
    border-color: #3b5bbf;
  }

  .btn-icon {
    width: 40px;
    height: 40px;
    vertical-align: middle;
    margin: 0;
}

</style>
@endsection

@section('content')
<div class="satu">
@foreach ($dataUmum as $item)
        <a href="{{ route('dataUmum.edit', $item->id) }}">
            <img src="{{ asset('img/profil.webp') }}" alt="Profile Picture">
        </a>
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
        

        <h1 onclick="tombol(0)" id="title1" class="active">Data Aparat</h1>
        <h1 onclick="tombol(1)" id="title2">PKA</h1>
        <h1 onclick="tombol(2)" id="title3">Tim Pelaksana Kegiatan</h1>
        <h1 onclick="tombol(3)" id="title4">Data Penyedia</h1>
    </div>

    <div class="content-tiga active" id="content1">
        <table class="table-tiga">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Lengkap</th>
                    <th>Gender</th>
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
                            <td>{{ $aparat->noHp }}</td>
                            <td>{{ $aparat->jabatan }}</td>
                            <td>
                            <a href="{{ route('dataAparat.show', $aparat->id) }}" class="btn">
                                <img src="/img/info.png" alt="Info" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Edit Button -->
                            <a href="{{ route('dataAparat.edit', $aparat->id) }}" class="btn">
                            <img src="/img/edit.png" alt="Edit" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('dataAparat.destroy', $aparat->id) }}" method="POST" style="display:inline;">
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
                        <td colspan="10" class="no-data">Tidak ada data aparat</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <a href="{{ route('dataAparat.index') }}" class="btn-primary">Tambahkan Data</a>
    </div>
    <div class="content-tiga" id="content2">
    <table class="table-tiga">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                      
                <th>Jabatan</th>
                <th>No HP</th>
                
                
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
                        
                        
                        <td>{{ $data->jabatan }}</td>
                        <td>{{ $data->noHp }}</td>
                        
                        
                        <td>{{ $data->noSkPka }}</td>
                        <td>{{ $data->tanggalSkPka }}</td>
                        <td>
                            <a href="{{ route('pka.show', $data->id) }}" class="btn">
                                <img src="/img/info.png" alt="Info" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Edit Button -->
                            <a href="{{ route('pka.edit', $data->id) }}" class="btn">
                            <img src="/img/edit.png" alt="Edit" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('pka.destroy', $data->id) }}" method="POST" style="display:inline;">
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
    <a href="{{ route('pka.index') }}" class="btn-primary">Tambahkan Data</a>
</div>


    <div class="content-tiga" id="content3">
    <table class="table-tiga">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gender</th>
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
                        <td>{{ $data->noHp }}</td>
                        <td>{{ $data->noSkTpk }}</td>
                        <td>{{ $data->tanggalSkTpk }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>
                            <a href="{{ route('tpk.show', $data->id) }}" class="btn">
                                <img src="/img/info.png" alt="Info" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Edit Button -->
                            <a href="{{ route('tpk.edit', $data->id) }}" class="btn">
                            <img src="/img/edit.png" alt="Edit" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('tpk.destroy', $data->id) }}" method="POST" style="display:inline;">
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
                        <td colspan="10" class="no-data">Tidak ada data aparat</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <a href="{{ route('tpk.index') }}" class="btn-primary">Tambahkan Data</a>
    </div>


    <div class="content-tiga" id="content4">
    <table class="table-tiga">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gender</th>
                    
                    <th>NIK</th>
                    
                    <th>Nama Toko</th>
                    <th>Alamat Toko</th>
                    <th>NPWP</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($penyedia) && count($penyedia) > 0)
                @foreach ($penyedia as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->gender }}</td>
                        
                        <td>{{ $item->NIK }}</td>
                        
                        <td>{{ $item->nama_toko }}</td>
                        <td>{{ $item->alamat_toko }}</td>
                        <td>{{ $item->npwp }}</td>
                        
                        <td>
                            <a href="{{ route('penyedia.show', $data->id) }}" class="btn">
                                <img src="/img/info.png" alt="Info" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Edit Button -->
                            <a href="{{ route('penyedia.edit', $data->id) }}" class="btn">
                            <img src="/img/edit.png" alt="Edit" style="width:24px; height:24px; border: none; background: none;">
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('penyedia.destroy', $data->id) }}" method="POST" style="display:inline;">
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
                        <td colspan="10" class="no-data">Tidak ada data aparat</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <a href="{{ route('penyedia.index') }}" class="btn-primary">Tambahkan Data</a>
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
