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
        dark: '#2d3748'
    };

    // Common chart options
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
        }
    };

    // 5. Grafik Jumlah Mahasiswa Aktif (Line Chart)
    const populasiCtx = document.getElementById('populasiChart');
    if (populasiCtx) {
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

});