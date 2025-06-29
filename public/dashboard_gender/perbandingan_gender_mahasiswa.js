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

    // Common chart options, applied to all charts for consistency
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
                    color: 'rgba(0,0,0,0.08)' // Subtle grid lines
                },
                ticks: {
                    font: {
                        family: 'Poppins',
                        size: 11
                    },
                    // Adds a comma for thousands, e.g., 12,000
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

    // 1. Gender Comparison Chart (Line Chart)
    const genderCtx = document.getElementById('genderChart');
    if (genderCtx) {
        new Chart(genderCtx.getContext('2d'), {
            type: 'line',
            data: {
                labels: ['2020', '2021', '2022', '2023', '2024'],
                datasets: [{
                    label: 'Laki-Laki',
                    data: [13500, 13200, 13800, 14100, 14500],
                    borderColor: colors.primary,
                    backgroundColor: colors.primary + '1A', // Using hex with low alpha
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: colors.primary,
                    pointBorderColor: '#fff',
                    pointBorderWidth: 3,
                    pointRadius: 6,
                    borderWidth: 3
                }, {
                    label: 'Perempuan',
                    data: [14200, 13800, 14500, 14900, 15200],
                    borderColor: colors.secondary,
                    backgroundColor: colors.secondary + '1A', // Using hex with low alpha
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: colors.secondary,
                    pointBorderColor: '#fff',
                    pointBorderWidth: 3,
                    pointRadius: 6,
                    borderWidth: 3
                }]
            },
            options: {
                ...commonOptions, // Inherit common styles
                scales: {
                    ...commonOptions.scales, // Inherit common axis styles
                    y: {
                        ...commonOptions.scales.y, // Inherit common Y-axis styles
                        beginAtZero: false,
                        min: 12000,
                        max: 16000
                    }
                }
            }
        });
    }


    // 2. Strata Gender Distribution Chart (Bar Chart)
    const strataGenderCtx = document.getElementById('strataGenderChart');
    if (strataGenderCtx) {
        new Chart(strataGenderCtx.getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['Sarjana (S1)', 'Magister (S2)', 'Doktor (S3)', 'Profesi'],
                datasets: [{
                    label: 'Laki-Laki',
                    data: [11500, 1800, 800, 400],
                    backgroundColor: colors.primary,
                    borderColor: colors.primary,
                    borderWidth: 1
                }, {
                    label: 'Perempuan',
                    data: [12200, 2100, 600, 300],
                    backgroundColor: colors.secondary,
                    borderColor: colors.secondary,
                    borderWidth: 1
                }]
            },
            options: {
                ...commonOptions, // Inherit common styles
                scales: {
                    ...commonOptions.scales, // Inherit common axis styles
                    y: {
                        ...commonOptions.scales.y, // Inherit common Y-axis styles
                        beginAtZero: true
                    },
                    x: {
                        ...commonOptions.scales.x, // Inherit common X-axis styles
                        grid: {
                            display: false // Hide grid lines on X-axis for bar chart
                        }
                    }
                }
            }
        });
    }
});