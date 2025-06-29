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
                labels: [
                    "Fakultas Teknik",
                    "Fakultas Ekonomi & Bisnis", 
                    "Fakultas Kedokteran",
                    "Fakultas Hukum",
                    "Fakultas Ilmu Sosial & Politik",
                    "Fakultas MIPA"
                ],
                datasets: [
                    {
                        label: "Jumlah Mahasiswa",
                        data: [4520, 3890, 2760, 2180, 2640, 2250],
                        backgroundColor: [
                            colors.primary,
                            colors.secondary,
                            colors.kedokteran,
                            colors.hukum,
                            colors.fisipol,
                            colors.mipa
                        ],
                        borderColor: [
                            colors.primary,
                            colors.secondary,
                            colors.kedokteran,
                            colors.hukum,
                            colors.fisipol,
                            colors.mipa
                        ],
                        borderWidth: 2
                    }
                ]
            },
            options: {
                // Mewarisi semua gaya dari template
                ...commonOptions,
                
                // Menambahkan atau menimpa opsi spesifik untuk chart ini
                plugins: {
                    ...commonOptions.plugins,
                    tooltip: {
                        backgroundColor: "rgba(0,0,0,0.8)",
                        titleFont: { family: "Poppins", size: 11 },
                        bodyFont: { family: "Poppins", size: 11 },
                        callbacks: {
                            label: function (context) {
                                const label = context.dataset.label || "";
                                const value = context.parsed.y;
                                return `${label}: ${value.toLocaleString()} mahasiswa`;
                            }
                        }
                    },
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 15,
                            font: {
                                family: 'Poppins',
                                size: 12
                            },
                            generateLabels: function(chart) {
                                const data = chart.data;
                                // Get the dataset metadata to check visibility
                                const meta = chart.getDatasetMeta(0);
                                
                                return data.labels.map((label, i) => {
                                    const dataset = data.datasets[0];
                                    const value = dataset.data[i];
                                    
                                    // Check if this specific data point is hidden
                                    let isHidden = false;
                                    if (meta && meta.data[i]) {
                                        isHidden = meta.data[i].hidden === true;
                                    }
                                    
                                    return {
                                        text: `${label} (${value.toLocaleString()})`,
                                        fillStyle: isHidden ? 'rgba(128, 128, 128, 0.4)' : dataset.backgroundColor[i],
                                        strokeStyle: isHidden ? 'rgba(128, 128, 128, 0.4)' : dataset.borderColor[i],
                                        lineWidth: dataset.borderWidth,
                                        pointStyle: 'circle',
                                        hidden: isHidden,
                                        index: i
                                    };
                                });
                            }
                        },
                        onClick: function(e, legendItem, legend) {
                            const index = legendItem.index;
                            const chart = legend.chart;
                            const meta = chart.getDatasetMeta(0);
                            
                            // Toggle visibility of the specific bar
                            if (meta.data[index]) {
                                const currentState = meta.data[index].hidden;
                                meta.data[index].hidden = !currentState;
                                
                                // Update chart with animation
                                chart.update();
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
                        title: {
                            display: true,
                            text: "Fakultas",
                            font: { family: "Poppins", size: 12, weight: "bold" },
                        },
                        ticks: {
                            ...commonOptions.scales.x.ticks,
                            maxRotation: 45,
                            minRotation: 45
                        }
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