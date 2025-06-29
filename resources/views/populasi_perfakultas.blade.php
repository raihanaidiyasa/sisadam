@extends('layouts.eksekutif')

@section('title', 'Populasi Mahasiswa Aktif Per Fakultas - Satu Data Mahasiswa')

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard_perfakultas/populasi_perfakultas.css') }}">
@endpush

@section('content')

<div class="content-card">
    <div class="section-header">
        <img src="{{ asset('image/database_stats.png') }}" alt="Icon" />
        <div>
            <div class="title">
                Populasi Mahasiswa Aktif 2020-2024 Per Fakultas
            </div>
            <div class="subtitle">
                Data populasi mahasiswa aktif berdasarkan fakultas dari
                tahun 2020 hingga 2024
            </div>
        </div>
    </div>

    <div class="chart">
        <div class="chart-box">
            <p class="chart-caption">
                Grafik Populasi Mahasiswa Aktif Per Fakultas Tahun
                2020–2024
            </p>
            <canvas id="fakultasChart" width="400" height="200"></canvas>
        </div>
    </div>

    <div class="data-cards">
        <div class="card">
            <div class="download-btn">Download</div>
            <h3>Data Fakultas Teknik 2020-2024</h3>
            <p>
                Data populasi mahasiswa aktif Fakultas Teknik dari tahun
                2020 hingga 2024
            </p>
            <button class="btn-csv">CSV</button>
        </div>

        <div class="card">
            <div class="download-btn">Download</div>
            <h3>Data Fakultas Ekonomi dan Bisnis 2020-2024</h3>
            <p>
                Data populasi mahasiswa aktif Fakultas Ekonomi dan
                Bisnis dari tahun 2020 hingga 2024
            </p>
            <button class="btn-csv">CSV</button>
        </div>

        <div class="card">
            <div class="download-btn">Download</div>
            <h3>Data Fakultas Kedokteran 2020-2024</h3>
            <p>
                Data populasi mahasiswa aktif Fakultas Kedokteran dari
                tahun 2020 hingga 2024
            </p>
            <button class="btn-csv">CSV</button>
        </div>

        <div class="card">
            <div class="download-btn">Download</div>
            <h3>Data Fakultas Hukum 2020-2024</h3>
            <p>
                Data populasi mahasiswa aktif Fakultas Hukum dari tahun
                2020 hingga 2024
            </p>
            <button class="btn-csv">CSV</button>
        </div>

        <div class="card">
            <div class="download-btn">Download</div>
            <h3>Data Fakultas Ilmu Sosial dan Politik 2020-2024</h3>
            <p>
                Data populasi mahasiswa aktif Fakultas Ilmu Sosial dan
                Politik dari tahun 2020 hingga 2024
            </p>
            <button class="btn-csv">CSV</button>
        </div>

        <div class="card">
            <div class="download-btn">Download</div>
            <h3>Ringkasan Semua Fakultas 2020-2024</h3>
            <p>
                Data lengkap populasi mahasiswa aktif seluruh fakultas
                dari tahun 2020 hingga 2024
            </p>
            <button class="btn-csv">CSV</button>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script src="{{ asset('dashboard_perfakultas/populasi_perfakultas.js') }}"></script>
@endpush