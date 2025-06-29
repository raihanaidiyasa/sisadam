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

    <div class="chart-section">
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Pastikan Chart.js sudah ter-load
    if (typeof Chart === 'undefined') {
        console.error('Chart.js tidak ter-load');
        return;
    }

    // Pastikan canvas element ada
    const canvas = document.getElementById("fakultasChart");
    if (!canvas) {
        console.error('Canvas element tidak ditemukan');
        return;
    }

    // Fakultas Population Chart
    const fakultasCtx = canvas.getContext("2d");
    
    try {
        const fakultasChart = new Chart(fakultasCtx, {
            type: "bar",
            data: {
                labels: ["2020", "2021", "2022", "2023", "2024"],
                datasets: [
                    {
                        label: "Fakultas Teknik",
                        data: [4200, 4350, 4500, 4650, 4800],
                        backgroundColor: "#DB005B",
                        borderColor: "#DB005B",
                        borderWidth: 1,
                    },
                    {
                        label: "Fakultas Ekonomi & Bisnis",
                        data: [3800, 3900, 4100, 4200, 4350],
                        backgroundColor: "#9E03A3",
                        borderColor: "#9E03A3",
                        borderWidth: 1,
                    },
                    {
                        label: "Fakultas Kedokteran",
                        data: [2100, 2200, 2350, 2450, 2600],
                        backgroundColor: "#FF6B9D",
                        borderColor: "#FF6B9D",
                        borderWidth: 1,
                    },
                    {
                        label: "Fakultas Hukum",
                        data: [1800, 1850, 1900, 1950, 2000],
                        backgroundColor: "#C44569",
                        borderColor: "#C44569",
                        borderWidth: 1,
                    },
                    {
                        label: "Fakultas Ilmu Sosial & Politik",
                        data: [2200, 2300, 2400, 2500, 2600],
                        backgroundColor: "#F8B500",
                        borderColor: "#F8B500",
                        borderWidth: 1,
                    },
                    {
                        label: "Fakultas MIPA",
                        data: [1500, 1600, 1700, 1800, 1900],
                        backgroundColor: "#6C5CE7",
                        borderColor: "#6C5CE7",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "bottom",
                        labels: {
                            font: {
                                family: "Poppins",
                                size: 12,
                            },
                            usePointStyle: true,
                            padding: 15,
                        },
                    },
                    tooltip: {
                        backgroundColor: "rgba(0,0,0,0.8)",
                        titleFont: {
                            family: "Poppins",
                            size: 13,
                        },
                        bodyFont: {
                            family: "Poppins",
                            size: 12,
                        },
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: "rgba(0,0,0,0.1)",
                        },
                        ticks: {
                            font: {
                                family: "Poppins",
                                size: 11,
                            },
                        },
                        title: {
                            display: true,
                            text: "Jumlah Mahasiswa",
                            font: {
                                family: "Poppins",
                                size: 12,
                                weight: "bold",
                            },
                        },
                    },
                    x: {
                        grid: {
                            display: false,
                        },
                        ticks: {
                            font: {
                                family: "Poppins",
                                size: 11,
                            },
                        },
                        title: {
                            display: true,
                            text: "Tahun",
                            font: {
                                family: "Poppins",
                                size: 12,
                                weight: "bold",
                            },
                        },
                    },
                },
            },
        });
        
        console.log('Chart berhasil dibuat');
    } catch (error) {
        console.error('Error membuat chart:', error);
    }
});
</script>
@endpush