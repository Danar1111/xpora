<x-app-layout>
    <div class="container mx-auto">
        <!-- Header -->
        <div class="text-center mb-6 p-4">
            <h4 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Sebaran Pembiayaan Berorientasi Ekspor</h4>
            <p class="text-gray-600 dark:text-gray-100">Per Sept 2023 mencapai <strong class="text-blue-500">Rp 32,3 T</strong> kepada <strong class="text-blue-500">25.200 UMKM</strong></p>
        </div>

        <!-- Map Section -->
        <div id="map" class="map-container text-center mb-8" style="height: 50vh; margin-bottom: 100px"></div>

        <!-- Highlight Section -->
        <div class="highlight-section relative" style="padding-bottom: 70px;">
            <h5 class="text-center text-xl font-bold text-gray-800 dark:text-gray-200 tittle_container">Highlight Xpora</h5>
            <div class="grid grid-cols-1 mt-6 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="relative highlight-card bg-white shadow rounded-lg p-4 text-center container_chart">
                    <div class="highlight-title text-white font-semibold text-center py-1 absolute header_container">
                        BD Kredit
                    </div>
                    <div class="flex">
                        <canvas id="bdKreditChart" class="chart h-24"></canvas>
                        <div style="align-content: center; width: 100%;">
                            <div class="highlight-value text-2xl font-bold text-blue-500 mb-4">32,3 T</div>
                            <div class="highlight-title text-lg font-semibold text-gray-800 mb-2">Total kredit berorientasi ekspor</div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="relative highlight-card bg-white shadow rounded-lg p-4 text-center container_chart">
                    <div class="highlight-title text-white font-semibold text-center py-1 absolute header_container">
                        CASA
                    </div>
                    <div class="flex">
                        <canvas id="casaChart" class="chart h-24"></canvas>
                        <div style="align-content: center; width: 100%;">
                            <div class="highlight-value text-2xl font-bold mb-4" style="color: #fe6804">4,4 T</div>
                            <div class="highlight-title text-lg font-semibold text-gray-800 mb-2">Total CASA</div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="relative highlight-card bg-white shadow rounded-lg p-4 text-center container_chart">
                    <div class="highlight-title text-white font-semibold text-center py-1 absolute header_container">
                        BD Kredit
                    </div>
                    <div class="flex">
                        <canvas id="bdKreditChart2" class="chart h-24"></canvas>
                        <div style="align-content: center; width: 100%;">
                            <div class="highlight-value text-2xl font-bold text-blue-500 mb-4">32,3 T</div>
                            <div class="highlight-title text-lg font-semibold text-gray-800 mb-2">Total kredit berorientasi ekspor</div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="relative highlight-card bg-white shadow rounded-lg p-4 text-center container_chart">
                    <div class="highlight-title text-white font-semibold text-center py-1 absolute header_container">
                        CASA
                    </div>
                    <div class="flex">
                        <canvas id="casaChart2" class="chart h-24"></canvas>
                        <div style="align-content: center; width: 100%;">
                            <div class="highlight-value text-2xl font-bold mb-4" style="color: #fe6804">4,4 T</div>
                            <div class="highlight-title text-lg font-semibold text-gray-800 mb-2">Total CASA</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Button -->
            <div class="update-btn mt-8">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Update!</button>
            </div>
        </div>

    </div>

    <!-- Leaflet.js -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        #map {
            background: transparent; /* Membuat background transparan */
            height: 500px;
        }
        .custom-tooltip {
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .custom-tooltip {
                padding: 1px 6px;
                font-size: 6px;
                border-radius: 3px;
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
            }
        }

        .chart {
            width: 70% !important; /* Sesuaikan dengan lebar kartu */
            height: 150px; /* Atur tinggi sesuai kebutuhan */
            max-height: 200px; /* Batas tinggi maksimal */
            margin-top: 3%;
        }

        .header_container {
            background-color: #009688;
            border-radius: 20px 0px 20px 0px;
            font-size: 30px;
            padding-right: 60px;
            padding-left: 60px;
            top: -20px;
            right: 30px;
        }

        .container_chart {
            justify-content: space-evenly;
            border: 2px solid #003e80;
            border-radius: 40px;
        }

        .tittle_container {
            margin-bottom: 3rem;
            background-color: #009688;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 20px;
        }

        .update-btn {
            background-color: #f24822;
            position: absolute;
            right: 2px;
            bottom: 10px;
            border-radius: 10px;
        }

    </style>

    <script>
        const regions = @json($regions);
        
        const map = L.map('map', {
            center: [-2.5489, 118.0149],
            zoom: 6,
            dragging: false,
            scrollWheelZoom: false,
            doubleClickZoom: false,
            boxZoom: false,
            keyboard: false,
            zoomControl: false,
            attributionControl: false
        });

        // Tambahkan GeoJSON dari public/geojson/id.json
        fetch('/geojson/id.json')
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch GeoJSON data');
            }
            return response.json();
        })
        .then(data => {
            let staticData = {};
            regions.forEach(region => {
                switch (region.name) {
                    case 'Sumatera':
                        staticData['Sumatera Barat'] = { debitur: region.debitur, nilai: region.nilai };
                        break;
                    case 'Kalimantan':
                        staticData['Kalimantan Tengah'] = { debitur: region.debitur, nilai: region.nilai };
                        break;
                    case 'Jawa':
                        staticData['Jawa Tengah'] = { debitur: region.debitur, nilai: region.nilai };
                        break;
                    case 'Sulawesi':
                        staticData['Sulawesi Tengah'] = { debitur: region.debitur, nilai: region.nilai };
                        break;
                    case 'Bali':
                        staticData['Bali'] = { debitur: region.debitur, nilai: region.nilai };
                        break;
                    case 'Papua':
                        staticData['Papua'] = { debitur: region.debitur, nilai: region.nilai };
                        break;
                    default:
                        staticData[region.name] = { debitur: region.debitur, nilai: region.nilai };
                            
                }
            });

            const nameMapping = {
                'Sumatera Barat': 'Sumatera',
                'Kalimantan Tengah': 'Kalimantan',
                'Jawa Tengah': 'Jawa',
                'Sulawesi Tengah': 'Sulawesi',
                'Bali': 'Bali',
                'Papua': 'Irian Jaya',
            };

            L.geoJSON(data, {
                style: function(feature) {
                    let fillColor;
                    switch (feature.properties.name) {
                        case 'Banten':
                        case 'Jakarta Raya':
                        case 'Jawa Barat':
                        case 'Jawa Tengah':
                        case 'Yogyakarta':
                        case 'Jawa Timur':
                            fillColor = '#00b0f0';
                            break;
                        case 'Aceh':
                        case 'Sumatera Utara':
                        case 'Sumatera Barat':
                        case 'Riau':
                        case 'Jambi':
                        case 'Bengkulu':
                        case 'Sumatera Selatan':
                        case 'Lampung':
                        case 'Bangka-Belitung':
                        case 'Kepulauan Riau':
                            fillColor = '#164d69';
                            break;
                        case 'Kalimantan Selatan':
                        case 'Kalimantan Timur':
                        case 'Kalimantan Barat':
                        case 'North Kalimantan':
                        case 'Kalimantan Tengah':
                            fillColor = '#019da5';
                            break;
                        case 'Nusa Tenggara Timur':
                        case 'Nusa Tenggara Barat':
                        case 'Bali':
                            fillColor = '#ffae85';
                            break;
                        case 'Maluku':
                        case 'Maluku Utara':
                        case 'Sulawesi Utara':
                        case 'Sulawesi Tenggara':
                        case 'Sulawesi Selatan':
                        case 'Sulawesi Barat':
                        case 'Sulawesi Tengah':
                        case 'Gorontalo':
                            fillColor = '#016f75';
                            break;
                        case 'Papua':
                        case 'Papua Barat':
                            fillColor = '#fc5400';
                            break;
                        default:
                            fillColor = '#ffffff';
                    }

                    return {
                        color: '#ababab',
                        fillColor: fillColor,
                        fillOpacity: 1,
                        weight: 1
                    };
                },
                onEachFeature: function(feature, layer) {
                    const wilayah = feature.properties.name;
                    const displayName = nameMapping[wilayah] || wilayah;
                    if (staticData[wilayah]) {
                        const { debitur, nilai } = staticData[wilayah];
                        const tooltipContent = `
                            <strong>${displayName}</strong><br>
                            ${debitur} debitur<br>
                            Rp${nilai.toLocaleString()}
                        `;

                        layer.bindTooltip(tooltipContent, {
                            permanent: true,
                            direction: 'center',
                            className: 'custom-tooltip'
                        });
                    }
                }
            }).addTo(map);

            map.fitBounds(L.geoJSON(data).getBounds());
        })
        .catch(error => {
            console.error('Error loading GeoJSON:', error);
        });

        // Data untuk Chart.js
        const chartData = {
            bdKredit: {
                labels: ['Dec 21', 'Jun 22', 'Dec 22', 'Sep 23'],
                datasets: [{
                    label: 'BD Kredit',
                    data: [18.1, 22.0, 26.7, 32.3],
                    backgroundColor: function(context) {
                        const data = context.chart.data.datasets[0].data;
                        const max = Math.max(...data);
                        return data.map(value => value === max ? '#4472c4' : '#8fd6cb');
                    },
                    borderRadius: 5,
                    borderSkipped: false
                }]
            },
            casa: {
                labels: ['Dec 21', 'Jun 22', 'Dec 22', 'Sep 23'],
                datasets: [{
                    label: 'CASA',
                    data: [3.0, 3.9, 4.1, 4.4],
                    backgroundColor: function(context) {
                        const data = context.chart.data.datasets[0].data;
                        const max = Math.max(...data);
                        return data.map(value => value === max ? '#4472c4' : '#8fd6cb');
                    },
                    borderRadius: 5,
                    borderSkipped: false
                }]
            }
        };

        const chartOptions = {
            responsive: true,
            maintainAspectRatio: true, // Grafik tetap mengikuti rasio aspek
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        display: false
                    }
                }
            }
        };


        // Render Chart.js di masing-masing kartu
        new Chart(document.getElementById('bdKreditChart'), {
            type: 'bar',
            data: chartData.bdKredit,
            options: chartOptions
        });

        new Chart(document.getElementById('casaChart'), {
            type: 'bar',
            data: chartData.casa,
            options: chartOptions
        });

        new Chart(document.getElementById('bdKreditChart2'), {
            type: 'bar',
            data: chartData.bdKredit,
            options: chartOptions
        });

        new Chart(document.getElementById('casaChart2'), {
            type: 'bar',
            data: chartData.casa,
            options: chartOptions
        });

    </script>
</x-app-layout>
