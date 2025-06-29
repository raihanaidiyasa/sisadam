@extends('layouts.eksekutif') {{-- Memperpanjang layout utama --}}

@section('title', 'Data Program Studi dan Fakultas - Satu Data Mahasiswa') {{-- Mengganti judul spesifik halaman --}}

@section('content') {{-- Memulai bagian konten --}}

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard_prodi_fakultas/data_prodi_fakultas.css') }}">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="{{ asset('dashboard_prodi_fakultas/data_prodi_fakultas.js') }}"></script>
@endpush

<div class="content-card">
    <div class="section-header">
        <img src="{{ asset('image/database_stats.png') }}" alt="Icon">
        <div>
            <div class="title">Data Program Studi dan Fakultas</div>
            <div class="subtitle">
                Statistik Program Studi dan Sebaran Mahasiswa Per
                Fakultas 2020-2024
            </div>
        </div>
    </div>

    <div class="charts">
        <div class="chart-box">
            <p class="chart-caption">
                Grafik Distribusi Mahasiswa Per Fakultas dan Jumlah
                Program Studi Aktif
            </p>
            <canvas id="facultyChart"></canvas>
        </div>
    </div>

    <div class="summary-stats">
        <div class="stat-card">
            <div class="stat-number">6</div>
            <div class="stat-label">Total Fakultas</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">45</div>
            <div class="stat-label">Total Program Studi Aktif</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">18,240</div>
            <div class="stat-label">Total Mahasiswa Aktif</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">3,040</div>
            <div class="stat-label">
                Rata-rata Mahasiswa per Fakultas
            </div>
        </div>
    </div>

    <div class="faculty-section">
        <h2 class="section-title">Detail Program Studi Per Fakultas</h2>

        <div class="faculty-grid">
            <div class="faculty-card">
                <div class="faculty-header">
                    <h3>Fakultas Teknik</h3>
                    <span class="prodi-count">8 Program Studi</span>
                </div>
                <div class="prodi-list">
                    <span class="prodi-item">Teknik Informatika</span>
                    <span class="prodi-item">Teknik Elektro</span>
                    <span class="prodi-item">Teknik Mesin</span>
                    <span class="prodi-item">Teknik Sipil</span>
                    <span class="prodi-item">Teknik Industri</span>
                    <span class="prodi-item">Arsitektur</span>
                    <span class="prodi-item">Teknik Lingkungan</span>
                    <span class="prodi-item">Teknik Kimia</span>
                </div>
                <div class="faculty-stats">
                    <div class="stat-item">
                        <span class="stat-value">4,520</span>
                        <span class="stat-desc">Mahasiswa</span>
                    </div>
                </div>
            </div>

            <div class="faculty-card">
                <div class="faculty-header">
                    <h3>Fakultas Ekonomi & Bisnis</h3>
                    <span class="prodi-count">6 Program Studi</span>
                </div>
                <div class="prodi-list">
                    <span class="prodi-item">Manajemen</span>
                    <span class="prodi-item">Akuntansi</span>
                    <span class="prodi-item">Ekonomi Pembangunan</span>
                    <span class="prodi-item">Bisnis Digital</span>
                    <span class="prodi-item">Keuangan & Perbankan</span>
                    <span class="prodi-item">Ekonomi Islam</span>
                </div>
                <div class="faculty-stats">
                    <div class="stat-item">
                        <span class="stat-value">3,890</span>
                        <span class="stat-desc">Mahasiswa</span>
                    </div>
                </div>
            </div>

            <div class="faculty-card">
                <div class="faculty-header">
                    <h3>Fakultas Kedokteran</h3>
                    <span class="prodi-count">7 Program Studi</span>
                </div>
                <div class="prodi-list">
                    <span class="prodi-item">Kedokteran</span>
                    <span class="prodi-item">Kedokteran Gigi</span>
                    <span class="prodi-item">Keperawatan</span>
                    <span class="prodi-item">Farmasi</span>
                    <span class="prodi-item">Kebidanan</span>
                    <span class="prodi-item">Gizi</span>
                    <span class="prodi-item">Kesehatan Masyarakat</span>
                </div>
                <div class="faculty-stats">
                    <div class="stat-item">
                        <span class="stat-value">2,760</span>
                        <span class="stat-desc">Mahasiswa</span>
                    </div>
                </div>
            </div>

            <div class="faculty-card">
                <div class="faculty-header">
                    <h3>Fakultas Hukum</h3>
                    <span class="prodi-count">4 Program Studi</span>
                </div>
                <div class="prodi-list">
                    <span class="prodi-item">Ilmu Hukum</span>
                    <span class="prodi-item">Hukum Bisnis</span>
                    <span class="prodi-item">Hukum Internasional</span>
                    <span class="prodi-item">Hukum Tata Negara</span>
                </div>
                <div class="faculty-stats">
                    <div class="stat-item">
                        <span class="stat-value">2,180</span>
                        <span class="stat-desc">Mahasiswa</span>
                    </div>
                </div>
            </div>

            <div class="faculty-card">
                <div class="faculty-header">
                    <h3>Fakultas Ilmu Sosial & Politik</h3>
                    <span class="prodi-count">8 Program Studi</span>
                </div>
                <div class="prodi-list">
                    <span class="prodi-item">Ilmu Komunikasi</span>
                    <span class="prodi-item">Hubungan Internasional</span>
                    <span class="prodi-item">Administrasi Publik</span>
                    <span class="prodi-item">Sosiologi</span>
                    <span class="prodi-item">Ilmu Politik</span>
                    <span class="prodi-item">Jurnalistik</span>
                    <span class="prodi-item">Psikologi</span>
                    <span class="prodi-item">Antropologi</span>
                </div>
                <div class="faculty-stats">
                    <div class="stat-item">
                        <span class="stat-value">2,640</span>
                        <span class="stat-desc">Mahasiswa</span>
                    </div>
                </div>
            </div>

            <div class="faculty-card">
                <div class="faculty-header">
                    <h3>Fakultas MIPA</h3>
                    <span class="prodi-count">12 Program Studi</span>
                </div>
                <div class="prodi-list">
                    <span class="prodi-item">Matematika</span>
                    <span class="prodi-item">Fisika</span>
                    <span class="prodi-item">Kimia</span>
                    <span class="prodi-item">Biologi</span>
                    <span class="prodi-item">Statistika</span>
                    <span class="prodi-item">Ilmu Komputer</span>
                    <span class="prodi-item">Sistem Informasi</span>
                    <span class="prodi-item">Geografi</span>
                    <span class="prodi-item">Geologi</span>
                    <span class="prodi-item">Meteorologi</span>
                    <span class="prodi-item">Astronomi</span>
                    <span class="prodi-item">Aktuaria</span>
                </div>
                <div class="faculty-stats">
                    <div class="stat-item">
                        <span class="stat-value">2,250</span>
                        <span class="stat-desc">Mahasiswa</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Data Program Studi Fakultas Teknik 2020-2024</h3>
        <p>
            Data detail program studi di Fakultas Teknik beserta jumlah
            mahasiswa, tingkat akreditasi, dan perkembangan dari tahun
            2020 hingga 2024
        </p>
        <button class="btn-csv">CSV</button>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Data Program Studi Fakultas Ekonomi & Bisnis 2020-2024</h3>
        <p>
            Data detail program studi di Fakultas Ekonomi & Bisnis
            dengan statistik peminat dan lulusan per program studi
            selama 5 tahun terakhir
        </p>
        <button class="btn-csv">CSV</button>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Data Program Studi Fakultas Kedokteran 2020-2024</h3>
        <p>
            Data komprehensif program studi kesehatan dengan tingkat
            kelulusan, akreditasi, dan sebaran mahasiswa per program
            studi
        </p>
        <button class="btn-csv">CSV</button>
    </div>

    <div class="card">
        <div class="download-btn">Download</div>
        <h3>Laporan Komprehensif Program Studi & Fakultas</h3>
        <p>
            Laporan lengkap analisis semua program studi dan fakultas
            dengan proyeksi perkembangan dan rekomendasi strategis
            pengembangan akademik
        </p>
        <button class="btn-csv">CSV</button>
    </div>
</div>

@endsection