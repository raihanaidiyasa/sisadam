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

        <form action="{{ route('dashboardPencarian') }}" method="GET" class="search-container">
            <input type="text" name="search" class="search-input" placeholder="Masukan Nama atau NIM Mahasiswa">
            <button type="submit" class="search-btn">
                <img src="{{ asset('image/searchvector.png') }}" alt="Search">
            </button>
        </form>

        <div class="section-header">
            <img src="{{ asset('image/database_stats.png') }}" class="section-icon" alt="Database Stats">
            <h2 class="section-title">Topik Data</h2>
        </div>

        <div class="data-grid">
        <a href="{{ route('dataMahasiswaAktif') }}" class="data-card-link">
            <div class="data-card">
                <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
                <div class="card-content">
                    <div class="card-title">
                        Populasi Mahasiswa Aktif 2020-2024
                    </div>
                </div>
            </div>
        </a>

            <a href="{{ route('perbandinganGenderMahasiswa') }}" class="data-card-link">
    <div class="data-card">
        <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
        <div class="card-content">
            <div class="card-title">
                Perbandingan jumlah mahasiswa laki laki dan perempuan per strata
            </div>
        </div>
    </div>
</a>

            <a href="{{ route('populasiPerfakultas') }}" class="data-card-link">
    <div class="data-card">
        <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
        <div class="card-content">
            <div class="card-title">
                Populasi Mahasiswa Aktif 2020 - 2024 Perfakultas
            </div>
        </div>
    </div>
</a>

            <div class="data-card">
                <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
                <div class="card-content">
                    <div class="card-title">
                        Dashboard Mahasiswa per Subyek Keilmuan
                    </div>
                </div>
            </div>

           <a href="{{ route('dataLulus') }}" class="data-card-link">
    <div class="data-card">
        <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
        <div class="card-content">
            <div class="card-title">
                Data Lulusan Tepat Waktu
            </div>
        </div>
    </div>
</a>

            <a href="{{ route('dataProdiFakultas') }}" class="data-card-link">
            <div class="data-card">
                <img src="{{ asset('image/database_stats.png') }}" class="card-icon" alt="Database Stats">
                <div class="card-content">
                    <div class="card-title">
                        Daftar Program Studi dan Fakultas
                    </div>
                </div>
            </div>
        </div>
</a>

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
    <script id="chart-data"
        data-ukt="{{ json_encode($uktData) }}"
        data-status="{{ json_encode($statusData) }}"
        data-asal="{{ json_encode($asalData) }}"
        data-populasi="{{ json_encode($populasiData) }}"
    ></script>
    <script src="{{ asset('dashboard_eksekutif/grafik.js') }}"></script>
@endpush