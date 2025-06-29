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
    <script>
        // Graduation Data Chart (Combination Chart)
        const graduationCtx = document
            .getElementById("graduationChart")
            .getContext("2d");
        const graduationChart = new Chart(graduationCtx, {
            type: "bar",
            data: {
                labels: ["2020", "2021", "2022", "2023", "2024"],
                datasets: [
                    {
                        label: "Lulusan S1",
                        data: [2850, 2920, 3100, 3250, 3400],
                        backgroundColor: "rgba(219, 0, 91, 0.7)",
                        borderColor: "#DB005B",
                        borderWidth: 1,
                        yAxisID: "y",
                    },
                    {
                        label: "Lulusan S2",
                        data: [480, 520, 580, 620, 680],
                        backgroundColor: "rgba(158, 3, 163, 0.7)",
                        borderColor: "#9E03A3",
                        borderWidth: 1,
                        yAxisID: "y",
                    },
                    {
                        label: "% Tepat Waktu S1",
                        data: [85.2, 86.8, 87.5, 88.9, 89.2],
                        type: "line",
                        borderColor: "#DB005B",
                        backgroundColor: "rgba(219, 0, 91, 0.1)",
                        borderWidth: 3,
                        fill: false,
                        tension: 0.4,
                        yAxisID: "y1",
                    },
                    {
                        label: "% Tepat Waktu S2",
                        data: [90.5, 91.2, 92.8, 93.1, 94.2],
                        type: "line",
                        borderColor: "#9E03A3",
                        backgroundColor: "rgba(158, 3, 163, 0.1)",
                        borderWidth: 3,
                        fill: false,
                        tension: 0.4,
                        yAxisID: "y1",
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    mode: "index",
                    intersect: false,
                },
                plugins: {
                    legend: {
                        position: "bottom",
                        labels: {
                            font: {
                                family: "Poppins",
                                size: 12,
                            },
                            usePointStyle: true,
                            padding: 20,
                        },
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                var label = context.dataset.label || "";
                                if (label) {
                                    label += ": ";
                                }
                                if (label.includes("%")) {
                                    label += context.parsed.y + "%";
                                } else {
                                    label +=
                                        context.parsed.y.toLocaleString() +
                                        " orang";
                                }
                                return label;
                            },
                        },
                    },
                },
                scales: {
                    x: {
                        grid: {
                            color: "rgba(0,0,0,0.1)",
                        },
                        ticks: {
                            font: {
                                family: "Poppins",
                                size: 11,
                            },
                        },
                    },
                    y: {
                        type: "linear",
                        display: true,
                        position: "left",
                        beginAtZero: true,
                        grid: {
                            color: "rgba(0,0,0,0.1)",
                        },
                        ticks: {
                            font: {
                                family: "Poppins",
                                size: 11,
                            },
                            callback: function (value) {
                                return value.toLocaleString();
                            },
                        },
                        title: {
                            display: true,
                            text: "Jumlah Lulusan",
                            font: {
                                family: "Poppins",
                                size: 12,
                                weight: 500,
                            },
                            color: "#666",
                        },
                    },
                    y1: {
                        type: "linear",
                        display: true,
                        position: "right",
                        min: 80,
                        max: 100,
                        grid: {
                            drawOnChartArea: false,
                        },
                        ticks: {
                            font: {
                                family: "Poppins",
                                size: 11,
                            },
                            callback: function (value) {
                                return value + "%";
                            },
                        },
                        title: {
                            display: true,
                            text: "Persentase Tepat Waktu",
                            font: {
                                family: "Poppins",
                                size: 12,
                                weight: 500,
                            },
                            color: "#666",
                        },
                    },
                },
            },
        });
    </script>
@endpush