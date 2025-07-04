// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    const chartDataSource = document.getElementById('chart-data');
    if (!chartDataSource) {
        console.error('Elemen sumber data grafik tidak ditemukan!');
        return;
    }

    const uktData = JSON.parse(chartDataSource.dataset.ukt);
    const statusData = JSON.parse(chartDataSource.dataset.status);
    const asalData = JSON.parse(chartDataSource.dataset.asal);
    const populasiData = JSON.parse(chartDataSource.dataset.populasi)
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
        dark: '#2d3748'
    };

    // Common chart options
    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
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
        }
    };

    // 1. Status Pembayaran UKT (Doughnut Chart)
    const uktCtx = document.getElementById('uktChart');
    if (uktCtx) {
        new Chart(uktCtx, {
            type: 'doughnut',
            data: {
                labels: ['Sudah Bayar', 'Belum Bayar'],
                datasets: [{
                    data: [uktData.lunas, uktData.belum_lunas],
                    backgroundColor: [
                        colors.primary,
                        colors.light
                    ],
                    borderWidth: 0,
                    hoverOffset: 4,
                    cutout: '60%'
                }]
            },
            options: {
                ...commonOptions,
                plugins: {
                    ...commonOptions.plugins,
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const allData = context.dataset.data;
                                const total = allData.reduce((a, b) => Number(a) + Number(b), 0);
                                const currentValue = Number(context.raw);

                                if (total === 0) {
                                    return context.label + ': 0%';
                                }

                                const percentage = ((currentValue / total) * 100).toFixed(1);
                                return `${context.label}: ${percentage}% (${currentValue})`;
                            }
                        }
                    }
                }
            }
        });
    }

    // 2. IPK Rata-Rata (Bar Chart)
    const ipkCtx = document.getElementById('ipkChart');
    if (ipkCtx) {
        new Chart(ipkCtx, {
            type: 'bar',
            data: {
                labels: ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4'],
                datasets: [{
                    label: 'IPK Rata-Rata',
                    data: [2.8, 3.2, 3.4, 3.7],
                    backgroundColor: [
                        colors.primary,
                        colors.secondary,
                        colors.tertiary,
                        colors.quaternary
                    ],
                    borderRadius: 5,
                    borderSkipped: false
                }]
            },
            options: {
                ...commonOptions,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 4.0,
                        ticks: {
                            stepSize: 1.0
                        }
                    }
                }
            }
        });
    }

    // 3. Status Mahasiswa (Doughnut Chart)
    const statusCtx = document.getElementById('statusChart');
    if (statusCtx && statusData) {
        new Chart(statusCtx, {
            type: 'doughnut',
            data: {
                labels: Object.keys(statusData),
                datasets: [{
                    data: Object.values(statusData),
                    backgroundColor: [
                        colors.primary,
                        colors.secondary,
                        colors.warning,
                        colors.success
                    ],
                    borderWidth: 0,
                    hoverOffset: 4,
                    cutout: '60%'
                }]
            },
            options: {
                ...commonOptions,
                plugins: {
                    ...commonOptions.plugins,
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const allData = context.dataset.data;
                                const total = allData.reduce((a, b) => Number(a) + Number(b), 0);
                                const currentValue = Number(context.raw);

                                if (total === 0) {
                                    return context.label + ': 0%';
                                }
                                
                                const percentage = ((currentValue / total) * 100).toFixed(1);
                                return `${context.label}: ${percentage}% (${currentValue})`;
                            }
                        }
                    }
                }
            }
        });
    }

    // 4. Asal Daerah (Horizontal Bar Chart)
    const asalCtx = document.getElementById('asalChart');
    if (asalCtx && asalData) {
        new Chart(asalCtx, {
            type: 'bar',
            data: {
                labels: Object.keys(asalData),
                datasets: [{
                    label: 'Jumlah Mahasiswa',
                    data: Object.values(asalData),
                    backgroundColor: [
                        colors.primary,
                        colors.secondary,
                        colors.tertiary,
                        colors.quaternary,
                        colors.light
                    ],
                    borderRadius: 5,
                    borderSkipped: false
                }]
            },
            options: {
                ...commonOptions,
                indexAxis: 'y',
                scales: {
                    x: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });
    }

    // 5. Grafik Jumlah Mahasiswa Aktif (Line Chart)
    const populasiCtx = document.getElementById('populasiChart');
    if (populasiCtx && populasiData) {
        new Chart(populasiCtx, {
            type: 'line',
            data: {
                labels: ['2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                    label: 'Jumlah Mahasiswa Aktif',
                    data: [28000, 26965, 27436, 27364, 27541],
                    borderColor: colors.primary,
                    backgroundColor: colors.primary + '20',
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: colors.primary,
                    pointBorderColor: '#fff',
                    pointBorderWidth: 3,
                    pointRadius: 6,
                    borderWidth: 3
                }]
            },
            options: {
                ...commonOptions,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 25000,
                        max: 30000,
                        ticks: {
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });
    }

    // 6. Grafik Jumlah Mahasiswa Aktif per Tingkat Strata (Multi-line Chart)
    const strataCtx = document.getElementById('strataChart');
    if (strataCtx) {
        new Chart(strataCtx, {
            type: 'line',
            data: {
                labels: ['2020', '2021', '2022', '2023', '2024'],
                datasets: [
                    {
                        label: 'Sarjana',
                        data: [21000, 17876, 19052, 19562, 20000],
                        borderColor: colors.primary,
                        backgroundColor: colors.primary + '20',
                        fill: false,
                        tension: 0.4,
                        pointBackgroundColor: colors.primary,
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        borderWidth: 3
                    },
                    {
                        label: 'Magister',
                        data: [18000, 16500, 17200, 17800, 18200],
                        borderColor: colors.secondary,
                        backgroundColor: colors.secondary + '20',
                        fill: false,
                        tension: 0.4,
                        pointBackgroundColor: colors.secondary,
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        borderWidth: 3
                    },
                    {
                        label: 'Doktor',
                        data: [15000, 14800, 15200, 15600, 16000],
                        borderColor: colors.tertiary,
                        backgroundColor: colors.tertiary + '20',
                        fill: false,
                        tension: 0.4,
                        pointBackgroundColor: colors.tertiary,
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        borderWidth: 3
                    },
                    {
                        label: 'Profesi',
                        data: [12000, 11800, 12200, 12800, 13200],
                        borderColor: colors.quaternary,
                        backgroundColor: colors.quaternary + '20',
                        fill: false,
                        tension: 0.4,
                        pointBackgroundColor: colors.quaternary,
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        borderWidth: 3
                    }
                ]
            },
            options: {
                ...commonOptions,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 10000,
                        max: 22000,
                        ticks: {
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });
    }

    // Add hover effects for cards
    const dataCards = document.querySelectorAll('.data-card, .chart-card');
    dataCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
            this.style.boxShadow = '0 12px 40px rgba(0, 0, 0, 0.15)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.08)';
        });
    });

    // Add search functionality
    const searchInput = document.querySelector('.search-input');
    const searchBtn = document.querySelector('.search-btn');
    
    // function handleSearch() {
    //     const searchTerm = searchInput.value.trim();
    //     if (searchTerm) {
    //         // Simulate search functionality
    //         console.log('Searching for:', searchTerm);
    //         // You can implement actual search logic here
    //         alert(`Mencari data untuk: ${searchTerm}`);
    //     }
    // }
    
    // if (searchBtn) {
    //     searchBtn.addEventListener('click', handleSearch);
    // }
    
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                handleSearch();
            }
        });
    }
});