document.addEventListener('DOMContentLoaded', function() {
    // Palet warna yang diperluas untuk mencakup semua kebutuhan grafik Anda
    const colors = {
        primary: '#DB005B',
        secondary: '#9E03A3',
        tertiary: '#E91E63',
        quaternary: '#8E24AA',
        kedokteran: '#FF6B9D',
        hukum: '#C44569',
        fisipol: '#F8B500',
        mipa: '#6C5CE7',
        success: '#4CAF50',
        warning: '#FF9800',
        info: '#2196F3',
        light: '#F8BBD9',
        dark: '#2d3748'
    };

    // Opsi umum untuk semua chart (template Anda)
    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                bottom: 30
            }
        },
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    usePointStyle: true,
                    padding: 20,
                    font: {
                        family: 'Poppins',
                        size: 12
                    }
                }
            }
        },
        scales: {
            y: {
                grid: {
                    color: 'rgba(0,0,0,0.08)'
                },
                ticks: {
                    font: {
                        family: 'Poppins',
                        size: 11
                    },
                    callback: function(value) {
                        return value.toLocaleString();
                    }
                }
            },
            x: {
                grid: {
                    color: 'rgba(0,0,0,0.08)'
                },
                ticks: {
                    font: {
                        family: 'Poppins',
                        size: 11
                    }
                }
            }
        }
    };

    // Inisialisasi Grafik Fakultas dengan FORMAT YANG BENAR
    const fakultasCanvas = document.getElementById("fakultasChart");
    if (fakultasCanvas) {
        new Chart(fakultasCanvas.getContext("2d"), {
            type: "bar",
            data: {
                labels: ["2020", "2021", "2022", "2023", "2024"],
                datasets: [
                    {
                        label: "Fakultas Teknik",
                        data: [4200, 4350, 4500, 4650, 4800],
                        backgroundColor: colors.primary,
                    },
                    {
                        label: "Fakultas Ekonomi & Bisnis",
                        data: [3800, 3900, 4100, 4200, 4350],
                        backgroundColor: colors.secondary,
                    },
                    {
                        label: "Fakultas Kedokteran",
                        data: [2100, 2200, 2350, 2450, 2600],
                        backgroundColor: colors.kedokteran,
                    },
                    {
                        label: "Fakultas Hukum",
                        data: [1800, 1850, 1900, 1950, 2000],
                        backgroundColor: colors.hukum,
                    },
                    {
                        label: "Fakultas Ilmu Sosial & Politik",
                        data: [2200, 2300, 2400, 2500, 2600],
                        backgroundColor: colors.fisipol,
                    },
                    {
                        label: "Fakultas MIPA",
                        data: [1500, 1600, 1700, 1800, 1900],
                        backgroundColor: colors.mipa,
                    },
                ],
            },
            options: {
                // 1. Mewarisi semua gaya dari template
                ...commonOptions,
                
                // 2. Menambahkan atau menimpa opsi spesifik untuk chart ini
                plugins: {
                    ...commonOptions.plugins, // Mewarisi konfigurasi legenda
                    tooltip: { // Menambahkan konfigurasi tooltip khusus
                        backgroundColor: "rgba(0,0,0,0.8)",
                        titleFont: { family: "Poppins", size: 11 },
                        bodyFont: { family: "Poppins", size: 11 },
                    },
                },
                scales: {
                    y: {
                        ...commonOptions.scales.y, // Mewarisi gaya sumbu Y
                        beginAtZero: true,
                        title: { // Menambahkan judul sumbu Y
                            display: true,
                            text: "Jumlah Mahasiswa",
                            font: { family: "Poppins", size: 12, weight: "bold" },
                        },
                    },
                    x: {
                        ...commonOptions.scales.x, // Mewarisi gaya sumbu X
                        grid: { display: false },
                        title: { // Menambahkan judul sumbu X
                            display: true,
                            text: "Tahun",
                            font: { family: "Poppins", size: 12, weight: "bold" },
                        },
                    },
                },
            },
        });
    }
});