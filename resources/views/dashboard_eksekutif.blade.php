@extends('layouts.eksekutif')

@section('title', 'Dashboard Eksekutif - Satu Data Mahasiswa')

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard_eksekutif/dashboard_eksekutif.css') }}">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
@endpush

@section('content')
    <main class="main-content">
        <h1 class="page-title">Dashboard Eksekutif</h1>

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Masukan Nama Mahasiswa">
            <button class="search-btn">
                <img src="{{ asset('image/searchvector.png') }}" alt="Search">
            </button>
        </div>

        <div class="section-header">
            <img src="{{ asset('image/database_stats.png') }}" class="section-icon" alt="Database Stats">
            <h2 class="section-title">Topik Data</h2>
        </div>

        <div class="data-grid">
        <a href="{{ route('data.mahasiswa.aktif') }}" class="data-card-link">
            <div class="data-card">
                <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
                <div class="card-content">
                    <div class="card-title">
                        Populasi Mahasiswa Aktif 2020-2024
                    </div>
                </div>
            </div>
        </a>

            <div class="data-card">
                <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
                <div class="card-content">
                    <div class="card-title">
                        Perbandingan jumlah mahasiswa laki laki dan perempuan per strata
                    </div>
                </div>
            </div>

            <div class="data-card">
                <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
                <div class="card-content">
                    <div class="card-title">
                        Populasi Mahasiswa Aktif 2020-2024 Per Fakultas
                    </div>
                </div>
            </div>

            <div class="data-card">
                <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
                <div class="card-content">
                    <div class="card-title">
                        Dashboard Mahasiswa per Subyek Keilmuan
                    </div>
                </div>
            </div>

            <div class="data-card">
                <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
                <div class="card-content">
                    <div class="card-title">Data lulusan tepat waktu</div>
                </div>
            </div>

            <div class="data-card">
                <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
                <div class="card-content">
                    <div class="card-title">
                        Daftar Program Studi dan Fakultas
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="charts-section">
            <div class="charts-grid">
                <div class="chart-card">
                    <h3 class="chart-title">Status Pembayaran UKT</h3>
                    <div class="chart-container">
                        <canvas id="uktChart"></canvas>
                    </div>
                </div>

                <div class="chart-card">
                    <h3 class="chart-title">IPK Rata-Rata</h3>
                    <div class="chart-container">
                        <canvas id="ipkChart"></canvas>
                    </div>
                </div>

                <div class="chart-card">
                    <h3 class="chart-title">Status Mahasiswa</h3>
                    <div class="chart-container">
                        <canvas id="statusChart"></canvas>
                    </div>
                </div>

                <div class="chart-card">
                    <h3 class="chart-title">Asal Daerah</h3>
                    <div class="chart-container">
                        <canvas id="asalChart"></canvas>
                    </div>
                </div>

                <div class="chart-card chart-card-wide">
                    <h3 class="chart-title">
                        Grafik Jumlah Mahasiswa Aktif
                    </h3>
                    <div class="chart-container chart-container-large">
                        <canvas id="populasiChart"></canvas>
                    </div>
                </div>

                <div class="chart-card chart-card-wide">
                    <h3 class="chart-title">
                        Grafik Jumlah Mahasiswa Aktif per Tingkat Strata
                    </h3>
                    <div class="chart-container chart-container-large">
                        <canvas id="strataChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('dashboard_eksekutif/grafik.js') }}"></script>
@endpush