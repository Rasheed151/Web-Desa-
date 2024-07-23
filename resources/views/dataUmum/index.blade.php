@extends('layouts')

@section('content')
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
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Umum</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('data-umum.create') }}"> Create New Data</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tempat Desa</th>
            <th>Alamat Kantor</th>
            <th>NPWP</th>
            <th>Kode Desa</th>
            <th>Kepala Desa</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($dataUmum as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->tempatDesa }}</td>
            <td>{{ $value->alamatKantor }}</td>
            <td>{{ $value->npwp }}</td>
            <td>{{ $value->kodeDesa }}</td>
            <td>{{ $value->kepalaDesa }}</td>
            <td>
                <form action="{{ route('data-umum.destroy', $value->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('data-umum.show', $value->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('data-umum.edit', $value->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
