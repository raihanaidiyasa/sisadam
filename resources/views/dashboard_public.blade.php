@extends('layouts.app') {{-- Memperpanjang layout utama --}}

@section('title', 'Halaman Utama - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}

<link rel="stylesheet" href="{{ asset('dashboard_public/dashboard_public.css') }}">
    <div class="hero-section">
        <form action="{{ route('dashboardPencarian') }}" method="GET" class="search-bar">
            <input type="text" name="search" placeholder="Cari Nama atau NIM Mahasiswa">
            <button type="submit" class="btn">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="content-container">
    <h2 class="section-title">SISADAM</h2>
        <p>SISADAM lahir dari sebuah keyakinan bahwa masa depan pendidikan yang unggul dibangun di atas fondasi data yang solid. Kami adalah sebuah platform terpusat yang dirancang untuk menjawab tantangan tersebut. Misi kami sederhana namun kuat: menyatukan seluruh data mahasiswa ke dalam satu sistem yang terintegrasi, akurat, dan mudah diakses, menciptakan sumber kebenaran tunggal (single source of truth) bagi seluruh pemangku kepentingan di lingkungan akademik.</p>


        <div class="section-header">
            <img src="{{ asset('image/database_stats.png') }}" class="section-icon" alt="Database Stats">
            <h2 class="section-title">Topik Data</h2>
        </div>

        <div class="data-grid">
        <a href="{{ route('downloadDataset') }}" class="data-card-link">
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