@extends('layouts')
@section('content')



    <h1>Data Umum Desa</h1>
    <table class="table table-bordered" id="dataTable">
        <thead>
        <tr>
            <th>Tempat Desa</th>
            <th>Alamat Kantor</th>
            <th>NPWP</th>
            <th>Kode Desa</th>
            <th>Kepala Desa</th>
            <th>No Perbub PJB</th>
            <th>Tanggal Perbub PJB</th>
            <th>No Keputusan DPA</th>
            <th>Tanggal Keputusan DPA</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @if (isset($datas) && !empty($datas))
            @foreach ($datas as $key => $data)
                @if(is_object($data))
        <tr>
            <td>{{ $data->tempat_desa }}</td>
            <td>{{ $data->alamat_kantor }}</td>
            <td>{{ $data->npwp }}</td>
            <td>{{ $data->kode_desa }}</td>
            <td>{{ $data->kepala_desa }}</td>
            <td>{{ $data->no_perbub_pjb }}</td>
            <td>{{ $data->tanggal_perbub_pjb }}</td>
            <td>{{ $data->no_keputusan_dpa }}</td>
            <td>{{ $data->tanggal_keputusan_dpa }}</td>
            <td>{{ $data->email }}</td>
        </tr>
                @endif
            @endforeach
        @endif
        </tbody>
    </table>



@endsection