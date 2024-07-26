@extends('layouts.custom')
@section('style')
<style>
.container {
    margin-top: 3rem;
}


.card {
    border-radius: 0.5rem;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    margin-bottom: 2rem; /* Add margin-bottom for spacing */
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.card-body {
    padding: 1.5rem;
}

.card-footer {
    padding: 1rem 1.5rem;
    background-color: rgba(0, 0, 0, 0.1);
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

/* Custom footer styles */
.custom-footer {
    text-align: center; /* Center the text */
    background-color: rgba(0, 0, 0, 0.2); /* Slightly darker background */
}

/* Custom link styles */
.custom-link {
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    transition: color 0.3s, text-shadow 0.3s;
}

.custom-link:hover {
    color: #ffff99; /* Light yellow color on hover */
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
}

.card-title h3 {
    margin: 0;
    font-size: 1.25rem;
    font-weight: 700;
}

/* Background colors for different card types */
.bg-primary {
    background-color: #2c7eaf;
}

.bg-success {
    background-color: #2c7e9e;
}

.bg-warning {
    background-color: #ffc107;
}

.bg-danger {
    background-color: #dc3545;
}

.bg-info {
    background-color: #17a2b8;
}

/* Hover effects for different card types */
.card.bg-primary:hover {
    background-color: #0056b3;
}

.card.bg-success:hover {
    background-color: #1e7e34;
}

.card.bg-warning:hover {
    background-color: #e0a800;
}

.card.bg-danger:hover {
    background-color: #bd2130;
}

.card.bg-info:hover {
    background-color: #117a8b;
}

/* Responsive adjustments */
@media (max-width: 767.98px) {
    .col-md-6 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

@media (max-width: 1199.98px) {
    .col-xl-3 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

</style>


@endsection
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Pelaksanaan Pengadaan Secara Swakelola</h1>
    <div class="row">
        @php
            $cards = [
                ['title' => 'Catatan Hasil Pembahasan Kegiatan', 'bg' => 'bg-primary', 'link' => '#', 'desc' => 'Catatan Hasil Pembahasan Kegiatan'],
                ['title' => 'Laporan Kegiatan Pelaksanaan Pekerjaan', 'bg' => 'bg-primary', 'link' => '#', 'desc' => 'Persiapan Pengadaan Secara Swakelola'],
                ['title' => 'Laporan Hasil Pelaksanaan Kegiatan', 'bg' => 'bg-primary', 'link' => '#', 'desc' => 'Persiapan Pengadaan Secara Swakelola'],
                ['title' => 'Pengumuman Hasil Kegiatan Pengadaan Secara SwaKelola', 'bg' => 'bg-primary', 'link' => '#', 'desc' => 'Persiapan Pengadaan Secara Swakelola'],
            ];
        @endphp

        @foreach ($cards as $card)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card {{ $card['bg'] }} text-white h-100">
                <div class="card-body">
                    <div class="card-title">
                        <h3>{{ $card['title'] }}</h3>
                    </div>
                    <p>{{ $card['desc'] }}</p>
                </div>
                <div class="card-footer custom-footer">
                    <a href="{{ $card['link'] }}" class="small text-white stretched-link custom-link">Olah Data {{ $card['title'] }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection