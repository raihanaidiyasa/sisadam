@extends('layouts.eksekutif') {{-- Memperpanjang layout utama --}}

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
            <img src="{{ asset('image/database_stats.png') }}" alt="Icon">
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

        <div class="card">
            <div class="download-btn">Download</div>
            <h3>Jumlah Mahasiswa Aktif tahun 3035</h3>
            <p>data Jumlah Koperasi dan Anggota Ksu Menurut Jenis Kelamin dan Kecamatan di Kabupaten Batang thn 2018</p>
            <button class="btn-csv">CSV</button>
        </div>

        <div class="card">
            <div class="download-btn">Download</div>
            <h3>Jumlah Mahasiswa Aktif tahun 3034</h3>
            <p>data Jumlah Koperasi dan Anggota Ksu Menurut Jenis Kelamin dan Kecamatan di Kabupaten Batang thn 2018</p>
            <button class="btn-csv">CSV</button>
        </div>
        <div class="card">
            <div class="download-btn">Download</div>
            <h3>Jumlah Mahasiswa Aktif tahun 3034</h3>
            <p>data Jumlah Koperasi dan Anggota Ksu Menurut Jenis Kelamin dan Kecamatan di Kabupaten Batang thn 2018</p>
            <button class="btn-csv">CSV</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('dashboard_data/mahasiswa_aktif.js') }}"></script>
@endpush


