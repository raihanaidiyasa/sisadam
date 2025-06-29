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
});