document.addEventListener('DOMContentLoaded', function() {
    // Color palette based on your requirements
    const colors = {
        primary: '#DB005B',    // Pink
        secondary: '#9E03A3',  // Purple
        tertiary: '#E91E63',   // Light Pink
        quaternary: '#8E24AA', // Light Purple
        success: '#4CAF50',
        warning: '#FF9800',
        info: '#2196F3',
        light: '#F8BBD9',
        dark: '#2d3748',
        gradient: ['#DB005B', '#9E03A3', '#E91E63', '#8E24AA', '#4CAF50', '#FF9800', '#2196F3', '#FFC107']
    };

    // Common chart options
    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                bottom: 10
            }
        },
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    usePointStyle: true,
                    padding: 15,
                    font: {
                        family: 'Poppins',
                        size: 11
                    }
                }
            }
        }
    };

    // 1. Distribution Chart (Doughnut Chart) - Distribusi Mahasiswa Per Subjek Keilmuan
    const distributionCtx = document.getElementById('distributionChart').getContext('2d');
    const distributionChart = new Chart(distributionCtx, {
        type: 'doughnut',
        data: {
            labels: [
                'Teknik & Teknologi',
                'Ekonomi & Bisnis', 
                'Sosial & Humaniora',
                'Kesehatan & Kedokteran',
                'Sains & MIPA',
                'Pertanian & Kehutanan',
                'Pendidikan',
                'Seni & Desain'
            ],
            datasets: [{
                data: [3200, 2850, 2100, 1800, 1200, 800, 350, 150],
                backgroundColor: [
                    colors.primary,
                    colors.secondary,
                    colors.tertiary,
                    colors.quaternary,
                    colors.success,
                    colors.warning,
                    colors.info,
                    '#FFC107'
                ],
                borderWidth: 3,
                borderColor: '#fff',
                hoverBorderWidth: 4,
                hoverBorderColor: '#fff'
            }]
        },
        options: {
            ...commonOptions,
            cutout: '60%',
            plugins: {
                ...commonOptions.plugins,
                legend: {
                    position: 'right',
                    labels: {
                        usePointStyle: true,
                        padding: 12,
                        font: {
                            family: 'Poppins',
                            size: 10
                        }
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.parsed;
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = ((value / total) * 100).toFixed(1);
                            return `${label}: ${value.toLocaleString()} (${percentage}%)`;
                        }
                    }
                }
            }
        }
    });

    // 2. Trend Chart (Line Chart) - Tren Mahasiswa Baru
    const trendCtx = document.getElementById('trendChart').getContext('2d');
    const trendChart = new Chart(trendCtx, {
        type: 'line',
        data: {
            labels: ['2020', '2021', '2022', '2023', '2024'],
            datasets: [
                {
                    label: 'Teknik & Teknologi',
                    data: [620, 680, 720, 750, 800],
                    borderColor: colors.primary,
                    backgroundColor: colors.primary + '20',
                    borderWidth: 3,
                    fill: false,
                    tension: 0.4
                },
                {
                    label: 'Ekonomi & Bisnis',
                    data: [580, 600, 650, 680, 720],
                    borderColor: colors.secondary,
                    backgroundColor: colors.secondary + '20',
                    borderWidth: 3,
                    fill: false,
                    tension: 0.4
                },
                {
                    label: 'Sosial & Humaniora',
                    data: [420, 450, 480, 500, 520],
                    borderColor: colors.tertiary,
                    backgroundColor: colors.tertiary + '20',
                    borderWidth: 3,
                    fill: false,
                    tension: 0.4
                }
            ]
        },
        options: {
            ...commonOptions,
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0,0,0,0.08)'
                    },
                    ticks: {
                        font: {
                            family: 'Poppins',
                            size: 10
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
                            size: 10
                        }
                    }
                }
            },
            plugins: {
                ...commonOptions.plugins,
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 10,
                        font: {
                            family: 'Poppins',
                            size: 9
                        }
                    }
                }
            }
        }
    });

    // 3. Gender Chart (Horizontal Bar Chart) - Perbandingan Gender
    const genderCtx = document.getElementById('genderChart').getContext('2d');
    const genderChart = new Chart(genderCtx, {
        type: 'bar',
        data: {
            labels: [
                'Teknik & Teknologi',
                'Ekonomi & Bisnis',
                'Sosial & Humaniora',
                'Kesehatan',
                'Sains & MIPA'
            ],
            datasets: [
                {
                    label: 'Laki-laki',
                    data: [2100, 1400, 850, 720, 680],
                    backgroundColor: colors.primary + 'CC',
                    borderColor: colors.primary,
                    borderWidth: 1
                },
                {
                    label: 'Perempuan',
                    data: [1100, 1450, 1250, 1080, 520],
                    backgroundColor: colors.secondary + 'CC',
                    borderColor: colors.secondary,
                    borderWidth: 1
                }
            ]
        },
        options: {
            ...commonOptions,
            indexAxis: 'y',
            scales: {
                x: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0,0,0,0.08)'
                    },
                    ticks: {
                        font: {
                            family: 'Poppins',
                            size: 10
                        },
                        callback: function(value) {
                            return value.toLocaleString();
                        }
                    }
                },
                y: {
                    grid: {
                        color: 'rgba(0,0,0,0.08)'
                    },
                    ticks: {
                        font: {
                            family: 'Poppins',
                            size: 9
                        }
                    }
                }
            },
            plugins: {
                ...commonOptions.plugins,
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 12,
                        font: {
                            family: 'Poppins',
                            size: 10
                        }
                    }
                }
            }
        }
    });

    // Add animation and interactivity
    const charts = [distributionChart, trendChart, genderChart];
    
    charts.forEach(chart => {
        chart.options.animation = {
            duration: 1000,
            easing: 'easeOutQuart'
        };
        
        chart.options.hover = {
            animationDuration: 300
        };
        
        chart.update();
    });

    // Add smooth scroll behavior for better UX
    document.querySelectorAll('.chart-box').forEach(box => {
        box.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px) scale(1.01)';
        });
        
        box.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
});