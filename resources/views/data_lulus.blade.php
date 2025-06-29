@extends('layouts.eksekutif') {{-- Memperpanjang layout utama --}}

@section('title', 'Data Lulusan Tepat Waktu - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard_lulus/data_lulus.css') }}">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
@endpush

<div class="content-card">
    <div class="section-header">
        <img src="{{ asset('image/database_stats.png') }}" alt="Icon">
        <div>
            <div class="title">Data Lulusan Tepat Waktu Per Strata</div>
            <div class="subtitle">
                Statistik Kelulusan Tepat Waktu Mahasiswa Berdasarkan
                Tingkat Strata 2020-2024
            </div>
        </div>
    </div>

    <div class="charts">
        <div class="chart-box">
            <p class="chart-caption">
                Grafik Persentase Kelulusan Tepat Waktu dan Jumlah
                Lulusan per Strata Tahun 2020–2024
            </p>
            <canvas id="graduationChart"></canvas>
        </div>
    </div>

    <div class="summary-stats">
        <div class="stat-card">
            <div class="stat-number">87.5%</div>
            <div class="stat-label">
                Rata-rata Kelulusan Tepat Waktu S1
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-number">92.3%</div>
            <div class="stat-label">
                Rata-rata Kelulusan Tepat Waktu S2
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-number">89.1%</div>
            <div class="stat-label">
                Rata-rata Kelulusan Tepat Waktu S3
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-number">94.7%</div>
            <div class="stat-label">
                Rata-rata Kelulusan Tepat Waktu Profesi
            </div>
        </div>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Data Lulusan Tepat Waktu S1 2020-2024</h3>
        <p>
            Data detail kelulusan tepat waktu mahasiswa program Sarjana
            (S1) dari tahun 2020 hingga 2024 beserta analisis tren
            kelulusan
        </p>
        <button class="btn-csv">CSV</button>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Data Lulusan Tepat Waktu S2 2020-2024</h3>
        <p>
            Data detail kelulusan tepat waktu mahasiswa program Magister
            (S2) dari tahun 2020 hingga 2024 dengan persentase
            keberhasilan
        </p>
        <button class="btn-csv">CSV</button>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Data Lulusan Tepat Waktu S3 & Profesi 2020-2024</h3>
        <p>
            Data detail kelulusan tepat waktu mahasiswa program Doktor
            (S3) dan Profesi dari tahun 2020 hingga 2024
        </p>
        <button class="btn-csv">CSV</button>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Laporan Komprehensif Kelulusan Tepat Waktu</h3>
        <p>
            Laporan lengkap analisis kelulusan tepat waktu semua strata
            dengan proyeksi dan rekomendasi peningkatan kualitas
            pendidikan
        </p>
        <button class="btn-csv">CSV</button>
    </div>
</div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="{{ asset('dashboard_lulus/data_lulus.js') }}"></script>
@endpush