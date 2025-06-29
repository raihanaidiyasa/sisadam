@extends('layouts.eksekutif') {{-- Memperpanjang layout utama --}}

@section('title', 'Perbandingan Gender Mahasiswa - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard_gender/perbandingan_gender_mahasiswa.css') }}">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
@endpush

<div class="content-card">
    <div class="section-header">
        <img src="{{ asset('image/database_stats.png') }}" alt="Icon">
        <div>
            <div class="title">Perbandingan Jumlah Mahasiswa Laki-Laki dan Perempuan Per Strata</div>
            <div class="subtitle">Perbandingan Jumlah Mahasiswa Laki-Laki dan Perempuan Per Strata 2020-2024</div>
        </div>
    </div>

    <div class="charts">
        <div class="chart-box">
            <p class="chart-caption">Grafik Perbandingan Mahasiswa Laki-Laki dan Perempuan Tahun 2020–2024</p>
            <canvas id="genderChart"></canvas>
        </div>
        <div class="chart-box">
            <p class="chart-caption">Grafik Perbandingan Mahasiswa Laki-Laki dan Perempuan per Tingkat Strata Tahun 2020–2024</p>
            <canvas id="strataGenderChart"></canvas>
        </div>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Data Mahasiswa Laki-Laki per Strata 2024</h3>
        <p>Data distribusi mahasiswa laki-laki berdasarkan tingkat strata pendidikan S1, S2, S3, dan Profesi tahun 2024</p>
        <button class="btn-csv">CSV</button>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Data Mahasiswa Perempuan per Strata 2024</h3>
        <p>Data distribusi mahasiswa perempuan berdasarkan tingkat strata pendidikan S1, S2, S3, dan Profesi tahun 2024</p>
        <button class="btn-csv">CSV</button>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Perbandingan Gender Mahasiswa 2020-2024</h3>
        <p>Data perbandingan jumlah mahasiswa laki-laki dan perempuan dari tahun 2020 hingga 2024 semua strata</p>
        <button class="btn-csv">CSV</button>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('dashboard_gender/perbandingan_gender_mahasiswa.js') }}"></script>
@endpush