@extends('layouts.app')

@section('content')
<h1 class="mb-4">Create Data PKA</h1>

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
        <form action="{{ route('pka.store') }}" method="POST"> 
            @csrf
            <div class="mb-3">
                <label for="noPka" class="form-label">Nomor:</label>
                <input type="number" name="noPka" class="form-control" required placeholder="Nomor">
            </div>

            <div class="mb-3">
                <label for="noSkPka" class="form-label">No SK PKA:</label>
                <input type="number" name="noSkPka" class="form-control" required placeholder="No SK PKA">
            </div>

            <div class="mb-3">
                <label for="tgglSkPka" class="form-label">Tanggal SK PKA:</label>
                <input type="date" name="tgglSkPka" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Masukan Data</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#noAparat').change(function() {
            var selectedOption = $(this).find('option:selected');
            var aparatData = selectedOption.data('aparat');

            console.log(aparatData); // Debugging line

            if (aparatData) {
                $('#gender').val(aparatData.gender);
                $('#ttlAparat').val(aparatData.ttl);
                $('#NIK').val(aparatData.NIK);
                $('#alamat').val(aparatData.alamat);
                $('#npwp').val(aparatData.npwp);
                $('#noHp').val(aparatData.noHp);
                $('#jbtn').val(aparatData.jbtn);
            } else {
                $('#gender').val('');
                $('#ttlAparat').val('');
                $('#NIK').val('');
                $('#alamat').val('');
                $('#npwp').val('');
                $('#noHp').val('');
                $('#jbtn').val('');
            }
        });
    });
</script>

@endsection
