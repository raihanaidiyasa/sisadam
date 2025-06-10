@extends('layouts.app') {{-- Memperpanjang layout utama --}}

@section('title', 'Halaman Utama - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}
    <div class="hero-section">
        <div class="search-bar">
            <input type="text" placeholder="Masukkan nama Mahasiswa">
            <button><i class="fas fa-search"></i></button>
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

        <div class="data-topics">
            <h3><span class="icon"><i class="fas fa-chart-bar"></i></span><span
                    style="color: black; word-wrap: break-word">Topik
                    Data</span></h3>
            <div class="topic-grid">
                <div class="topic-card">
                    <span class="icon"><i class="fas fa-users"></i></span>
                    <p>Populasi Mahasiswa Aktif 2020-2024</p>
                </div>
                <div class="topic-card">
                    <span class="icon"><i class="fas fa-person-half-dress"></i></span>
                    <p>Perbandingan jumlah mahasiswa laki laki dan perempuan per strata</p>
                </div>
                <div class="topic-card">
                    <span class="icon"><i class="fas fa-building"></i></span>
                    <p>Populasi Mahasiswa Aktif 2020-2024 Per Fakultas</p>
                </div>
                <div class="topic-card">
                    <span class="icon"><i class="fas fa-gauge-high"></i></span>
                    <p>Dashboard Mahasiswa Per Subyek Keilmuan</p>
                </div>
                <div class="topic-card">
                    <span class="icon"><i class="fas fa-user-graduate"></i></span>
                    <p>Data lulusan tepat waktu</p>
                </div>
                <div class="topic-card">
                    <span class="icon"><i class="fas fa-book-open"></i></span>
                    <p>Daftar Program Studi dan Fakultas</p>
                </div>
            </div>
            <div class="see-more">
                <a href="#">Selengkapnya ></a>
            </div>
        </div>
    </div>
@endsection {{-- Mengakhiri bagian konten --}}