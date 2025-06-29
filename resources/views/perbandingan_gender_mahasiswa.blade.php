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
            <p class="chart-caption">Grafik Distribusi Gender per Tingkat Strata Tahun 2020–2024</p>
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
    <script>
        // Gender Comparison Chart
        const genderCtx = document.getElementById('genderChart').getContext('2d');
        const genderChart = new Chart(genderCtx, {
            type: 'line',
            data: {
                labels: ['2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                    label: 'Laki-Laki',
                    data: [13500, 13200, 13800, 14100, 14500],
                    borderColor: '#DB005B',
                    backgroundColor: 'rgba(219, 0, 91, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Perempuan',
                    data: [14200, 13800, 14500, 14900, 15200],
                    borderColor: '#9E03A3',
                    backgroundColor: 'rgba(158, 3, 163, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: {
                                family: 'Poppins',
                                size: 12
                            },
                            usePointStyle: true,
                            padding: 20
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 12000,
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        },
                        ticks: {
                            font: {
                                family: 'Poppins',
                                size: 11
                            }
                        }
                    },
                    x: {
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        },
                        ticks: {
                            font: {
                                family: 'Poppins',
                                size: 11
                            }
                        }
                    }
                }
            }
        });

        // Strata Gender Distribution Chart
        const strataGenderCtx = document.getElementById('strataGenderChart').getContext('2d');
        const strataGenderChart = new Chart(strataGenderCtx, {
            type: 'bar',
            data: {
                labels: ['S1', 'S2', 'S3', 'Profesi'],
                datasets: [{
                    label: 'Laki-Laki',
                    data: [11500, 1800, 800, 400],
                    backgroundColor: '#DB005B',
                    borderColor: '#DB005B',
                    borderWidth: 1
                }, {
                    label: 'Perempuan',
                    data: [12200, 2100, 600, 300],
                    backgroundColor: '#9E03A3',
                    borderColor: '#9E03A3',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: {
                                family: 'Poppins',
                                size: 12
                            },
                            usePointStyle: true,
                            padding: 20
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0,0,0,0.1)'
                        },
                        ticks: {
                            font: {
                                family: 'Poppins',
                                size: 11
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Poppins',
                                size: 11
                            }
                        }
                    }
                }
            }
        });
    </script>
@endpush