@extends('layouts.custom')

@section('style')
<style>
    /* Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Roboto', sans-serif;
    color: #333;
}

/* Heading */
.container h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #4e73df;
    text-align: center;
    margin-bottom: 2rem;
    position: relative;
}

.container h1::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: #4e73df;
    margin: 10px auto;
    border-radius: 2px;
}

/* Card styles */
.card {
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out, background 0.3s ease-in-out;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    background: linear-gradient(135deg, #ffffff 50%, #f8f9fc 50%);
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
    height: 100%;
    margin-right: 20px;
    margin-bottom: 20px;
}

/* Card hover effects */
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.25);
    background: linear-gradient(135deg, #f8f9fc 50%, #ffffff 50%);
}

/* Card Body */
.card-body {
    padding: 20px;
    text-align: center;
    color: #333;
    flex: 1; /* Allows the card body to expand and fill available space */
    margin-bottom: 20px;
}

/* Card Title */
.card-title h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #4e73df;
    font-weight: 600;
    position: relative;
    transition: color 0.3s ease-in-out;
}

/* Card Title hover effects */
.card:hover .card-title h3 {
    color: #2c7e9e;
}

/* Card Description */
.card p {
    font-size: 1rem;
    color: #6c757d;
    margin-bottom: 1rem;
}

/* Card Footer */
.card-footer {
    background-color: #ffffff;
    padding: 15px;
    text-align: center;
    border-top: 1px solid #e3e6f0;
    position: relative;
    transition: background-color 0.3s ease-in-out;
}

/* Card Footer hover effects */
.card:hover .card-footer {
    background-color: #f8f9fc;
}

/* Footer Link */
.card-footer .custom-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4e73df;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    font-weight: 500;
}

/* Footer Link hover effects */
.card-footer .custom-link:hover {
    background-color: #2c7e9e;
    transform: scale(1.05);
}

/* Background colors */
.bg-primary {
    background-color: #4e73df !important;
}

/* Responsive styles */
@media (max-width: 768px) {
    .card {
        flex: 1 1 100%;
    }

    .container h1 {
        font-size: 2rem;
    }
}

@media (min-width: 769px) {
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-xl-6 {
        flex: 1 1 50%; /* 2 cards per row */
        margin-bottom: 20px;
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
                ['title' => 'Catatan Hasil Pembahasan Kegiatan', 'bg' => 'bg-primary', 'link' => 'CatatanHasilSwa', 'desc' => 'Catatan Hasil Pembahasan Kegiatan'],
                ['title' => 'Laporan Kegiatan Pelaksanaan Pekerjaan', 'bg' => 'bg-primary', 'link' => 'example', 'desc' => 'Persiapan Pengadaan Secara Swakelola'],
                ['title' => 'Laporan Hasil Pelaksanaan Kegiatan', 'bg' => 'bg-primary', 'link' => 'example1', 'desc' => 'Persiapan Pengadaan Secara Swakelola'],
                ['title' => 'Pengumuman Hasil Kegiatan Pengadaan Secara SwaKelola', 'bg' => 'bg-primary', 'link' => 'example2', 'desc' => 'Persiapan Pengadaan Secara Swakelola'],
            ];
        @endphp

        @foreach ($cards as $card)
        <div class="col-xl-6 col-md-12 mb-4">
            <div class="card {{ $card['bg'] }} text-white">
                <div class="card-body">
                    <div class="card-title">
                        <h3>{{ $card['title'] }}</h3>
                    </div>
                    <p>{{ $card['desc'] }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ $card['link'] }}" class="custom-link">Olah Data {{ $card['title'] }}</a>
                </div>
            </div>
        </div>
        @endforeach
     </div>
</div>
@endsection
