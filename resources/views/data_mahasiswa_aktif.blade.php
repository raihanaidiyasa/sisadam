@extends('layouts.app') {{-- Memperpanjang layout utama --}}

@section('title', 'Halaman Utama - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard_data/mahasiswa_aktif.css') }}">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
@endpush

<div class="content-card">
        <div class="section-header">
            <img src="/public/image/database_stats.png" alt="Icon">
            <div>
                <div class="title">Populasi Mahasiswa Aktif 2024–2025</div>
                <div class="subtitle">Populasi Mahasiswa Aktif 2024–2025</div>
            </div>
        </div>

        <button class="download-btn">Download</button>

        <div class="charts">
            <div class="chart-box">
                <p class="chart-caption"> Grafik Jumlah Mahasiswa Aktif Tahun 2020–2024</p>
                <canvas id="populasiChart"></canvas>

            </div>
            <div class="chart-box">
                <p class="chart-caption">Grafik Jumlah Mahasiswa Aktif per Tingkat Strata Tahun 2020–2024
                </p>
                <canvas id="strataChart"></canvas>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('dashboard_data/mahasiswa_aktif.js') }}"></script>
@endpush


