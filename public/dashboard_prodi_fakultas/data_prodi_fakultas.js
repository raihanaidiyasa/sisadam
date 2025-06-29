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

    // Inisialisasi Grafik Fakultas dengan FORMAT BAR CHART
    const facultyCtx = document.getElementById("facultyChart");
if (facultyCtx) {
    new Chart(facultyCtx.getContext("2d"), {
        type: "bar",
        data: {
            // Label di sumbu X kini hanya satu, sebagai kategori umum
            labels: ["Populasi per Fakultas"],
            
            // Setiap fakultas sekarang menjadi dataset terpisah
            datasets: [
                {
                    label: "Fakultas Teknik",
                    data: [4520],
                    backgroundColor: colors.primary,
                    borderColor: colors.primary,
                    borderWidth: 1
                },
                {
                    label: "Fakultas Ekonomi & Bisnis",
                    data: [3890],
                    backgroundColor: colors.secondary,
                    borderColor: colors.secondary,
                    borderWidth: 1
                },
                {
                    label: "Fakultas Kedokteran",
                    data: [2760],
                    backgroundColor: colors.kedokteran,
                    borderColor: colors.kedokteran,
                    borderWidth: 1
                },
                {
                    label: "Fakultas Hukum",
                    data: [2180],
                    backgroundColor: colors.hukum,
                    borderColor: colors.hukum,
                    borderWidth: 1
                },
                {
                    label: "Fakultas Ilmu Sosial & Politik",
                    data: [2640],
                    backgroundColor: colors.fisipol,
                    borderColor: colors.fisipol,
                    borderWidth: 1
                },
                {
                    label: "Fakultas MIPA",
                    data: [2250],
                    backgroundColor: colors.mipa,
                    borderColor: colors.mipa,
                    borderWidth: 1
                }
            ]
        },
        options: {
            // Mewarisi semua gaya dari template
            ...commonOptions,
            
            plugins: {
                // KITA HANYA MEWARISI DARI COMMON OPTIONS
                // SEMUA KODE KUSTOM generateLabels DAN onClick DIHAPUS
                ...commonOptions.plugins, 
                
                // Kita masih bisa menambahkan kustomisasi tooltip
                tooltip: {
                    backgroundColor: "rgba(0,0,0,0.8)",
                    titleFont: { family: "Poppins", size: 11 },
                    bodyFont: { family: "Poppins", size: 11 },
                    callbacks: {
                        label: function (context) {
                            // Mengambil label dari dataset (misal: "Fakultas Teknik")
                            const label = context.dataset.label || "";
                            const value = context.parsed.y;
                            return `${label}: ${value.toLocaleString()} mahasiswa`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    ...commonOptions.scales.y,
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: "Jumlah Mahasiswa",
                        font: { family: "Poppins", size: 12, weight: "bold" },
                    },
                },
                x: {
                    ...commonOptions.scales.x,
                    grid: { display: false },
                    // Judul sumbu X tidak lagi relevan karena sudah dijelaskan oleh legenda
                },
            },
            animation: {
                duration: 1000,
                easing: 'easeInOutQuart'
            }
        }
    });
    }
});