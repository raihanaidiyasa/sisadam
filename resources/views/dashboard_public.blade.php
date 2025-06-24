@extends('layouts.app') {{-- Memperpanjang layout utama --}}

@section('title', 'Halaman Utama - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}

<link rel="stylesheet" href="{{ asset('dashboard_public/dashboard_public.css') }}">
    <div class="hero-section">
        <div class="search-bar">
            <input type="text" placeholder="Masukkan nama Mahasiswa">
            <a href="{{ route('dashboardPencarian') }}" class="btn">
                <i class="fas fa-search"></i>
            </a>
        </div>
    </div>

    <div class="content-container">
        <div class="about-sisadam">
            <h3>About SISADAM</h3>
            <p>Lorem ipsum dolor sit amet consectetur. Mauris id eleifend sollicitudin convallis. Fusce lectus ut non
                eget ullamcorper. Sed gravida nulla adipiscing auctor dua merta risus orci ultricies tellus vitae mauris
                pellentesque odio. Egestas tempus praesent viverra sed sit. Diam viverra in in etiam dignissim feugiat
                tellus. Mattis diam vitae euismod id pellentesque interdum.</p>
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
    </div>
@endsection {{-- Mengakhiri bagian konten --}}