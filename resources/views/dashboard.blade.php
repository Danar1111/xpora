<x-app-layout>
    <div class="container mx-auto">
        <!-- Header -->
        <div class="text-center mb-6 p-4">
            <h4 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Peta Sebaran UMKM di Indonesia</h4>
        </div>

        <div class="container mx-auto flex flex-row items-start space-x-6">
            <!-- Map Section -->
            <div id="map" class="map-container w-3/4" style="height: auto;"></div>
        
            <!-- Highlight Section -->
            <div class="highlight-section w-1/4 flex flex-col items-start space-y-4 p-4 container-info">
                <div class="info-box bg-white shadow rounded-lg p-4 text-left">
                    <h5 class="text-lg font-semibold text-gray-800">INDONESIA</h5>
                    <p class="text-sm text-gray-500">Jumlah UMKM: <span class="font-bold">96,989</span></p>
                </div>
                <div class="info-box bg-white shadow rounded-lg p-4 text-left">
                    <h5 class="text-lg font-semibold text-orange-600">93,241</h5>
                    <p class="text-sm text-gray-500">Mikro (94%)</p>
                </div>
                <div class="info-box bg-white shadow rounded-lg p-4 text-left">
                    <h5 class="text-lg font-semibold text-orange-600">5,917</h5>
                    <p class="text-sm text-gray-500">Kecil (6%)</p>
                </div>
                <div class="info-box bg-white shadow rounded-lg p-4 text-left">
                    <h5 class="text-lg font-semibold text-orange-600">531</h5>
                    <p class="text-sm text-gray-500">Menengah (1%)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-container container mx-auto p-2" style="height: auto">
        <!-- Business Impact -->
        <div class="flex flex-row items-start space-x-6">
            <div class="w-3/5 bg-white shadow rounded-lg p-4 flex flex-col items-center justify-center" style="height: 350px; margin: 10px; border: 2px solid #001225;">
                <h5 class="text-lg font-semibold text-gray-800">Business Impact</h5>
                <canvas id="businessImpactChart"></canvas>
            </div>
            <div class="w-2/5 bg-white shadow rounded-lg p-4" style="height: 350px; margin: 10px; border: 2px solid #001225;">
                <h5 class="text-lg font-semibold text-gray-800">Budget</h5>
                <p class="text-sm text-gray-500 mt-4">Usulan: <span class="font-bold text-green-600">1.342 M</span></p>
                <p class="text-sm text-gray-500">Realisasi: <span class="font-bold text-orange-600">1.331 M</span></p>
            </div>
        </div>
    
        <!-- Pie Charts -->
        <div class="flex flex-row" style="justify-content: space-between; flex-wrap: wrap">
            <div class="flex flex-col" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                <div class="w-1/2 bg-white shadow rounded-xl p-1" style="height: 100px; margin: 10px; width: 300px; border: 2px solid #001225; justify-items:center">
                    <h5 class="text-l font-semibold text-gray-800">Advisory</h5>
                    <h2 class="font-bold text-gray-800">5</h2>
                </div>
                <div class="w-1/2 bg-white shadow rounded-xl p-1" style="height: 100px; margin: 10px; width: 300px; border: 2px solid #001225;">
                    <h5 class="text-l font-semibold text-gray-800">Bizmatch</h5>
                    <h2 class="font-bold text-gray-800">5</h2>
                </div>
                <div class="w-1/2 bg-white shadow rounded-xl p-1" style="height: 100px; margin: 10px; width: 300px; border: 2px solid #001225;">
                    <h5 class="text-l font-semibold text-gray-800">Event</h5>
                    <h2 class="font-bold text-gray-800">5</h2>
                </div>
                <div class="w-1/2 bg-white shadow rounded-xl p-1" style="height: 100px; margin: 10px; width: 300px; border: 2px solid #001225;">
                    <h5 class="text-l font-semibold text-gray-800">Release</h5>
                    <h2 class="font-bold text-gray-800">5</h2>
                </div>
                <div class="w-1/2 bg-white shadow rounded-xl p-1" style="height: 100px; margin: 10px; width: 300px; border: 2px solid #001225;">
                    <h5 class="text-l font-semibold text-gray-800">Marcom</h5>
                    <h2 class="font-bold text-gray-800">5</h2>
                </div>
            </div>
            <div class="flex flex-col" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                <div class="bg-white shadow rounded-xl p-4 flex flex-col items-center justify-center" style="height: 300px; margin: 10px; max-width: 450px; width:100%; border: 2px solid #001225;">
                    <h5 class="text-l font-semibold text-gray-800">Progress Advisory</h5>
                    <canvas id="progressAdvisoryChart"></canvas>
                </div>
                <div class="bg-white shadow rounded-xl p-4 flex flex-col items-center justify-center" style="height: 300px; margin: 10px; max-width: 450px; width:100%; border: 2px solid #001225;">
                    <h5 class="text-l font-semibold text-gray-800">Progress Business Match</h5>
                    <canvas id="progressBusinessMatchChart"></canvas>
                </div>
            </div>
            <div class="flex flex-col" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                <div class="bg-white shadow rounded-xl p-4" style="height: 300px; margin: 10px; width: 350px; border: 2px solid #001225;">
                    <h5 class="text-l font-semibold text-gray-800">Top 10 Produk Ekspor Indonesia 2024</h5>

                </div>
                <div class="bg-white shadow rounded-xl p-4" style="height: 300px; margin: 10px; width: 350px; border: 2px solid #001225;">
                    <h5 class="text-l font-semibold text-gray-800">10 Negara Tujuan Utama Ekspor Indonesia Di Timur Tengah Dan Afrika</h5>

                </div>
            </div>
        </div>
    </div>               

    <!-- Leaflet.js -->
    <script src="https://d3js.org/d3.v4.min.js" charset="utf-8"></script>
    <script src="https://d3js.org/topojson.v3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        #map {
            position: relative;
            width: 100%;
            height: 500px;
            overflow: hidden; /* Hindari elemen keluar */
        }
        svg.map {
            width: 100%;
            height: 70%;
        }

        .info-box {
            width: 100%;
            margin-bottom: 10px;
        }

        .container-info {
            margin-top: 8%;
        }

        .dashboard-container {
            height: 110vh;
            border: 2px solid #001225;
            border-radius: 40px;
        }
        canvas {
            display: block;
            max-width: 80%;
            max-height: 80%;
            width: 100%;
            height: 100%;
            margin: 2%;
        }

        .dashboard-container .shadow {
            border: 1px solid #e5e7eb;
        }

        .dashboard-container h5 {
            margin-bottom: 10px;
            text-align: center;
        }
        .dashboard-container h2 {
            margin-bottom: 16px;
            text-align: center;
            font-size: 30px;
        }

        main {
            height: auto;
        }
    </style>    

    <script>        
        var width = window.innerWidth,
            height = window.innerHeight,
            populationDomain;

        var colorRange = ["#fbc398", "#fbc398", "#ffc294", "#ffbb87", "#faac70", "#f36800", "#cd5700", "#8e3d00", "#632b00"];
        var populationDomain = [0, 100000, 200000, 300000, 500000, 750000, 1000000, 1500000, 2500000, 5000000];  

        // Create SVG element
        var svg = d3.select("#map").append("svg")
            .attr("viewBox", `0 0 ${width} ${height * 0.8}`)
            .attr("preserveAspectRatio", "xMidYMid meet")
            .attr("class", "map");

        // Projection and path
        var projection = d3.geoMercator()
                            .center([118.25, -5])
                            .scale(width * 1.2)
                            .translate([width / 2, height / 2]);

        var path = d3.geoPath().projection(projection);

        // Asynchronous tasks, load topojson map and data
        d3.queue()
        .defer(d3.json, "/geojson/IDN.json")
        .defer(d3.csv, "/geojson/IDN.csv")
        .await(ready);

        // Callback function
        function ready(error, data, population) {
        if (error) throw error;

        // Population data
        var populationData = {};

        population.forEach(function(d) { populationData[d.id] = +d.population; });

        // Color
        var populationColor = d3.scaleThreshold()
                                .domain(populationDomain)
                                .range(colorRange);

        var g = svg.append("g");

        // Draw the map
        g.selectAll("path")
            .attr("class", "city")
            .data(topojson.feature(data, data.objects.IDN).features)
            .enter()
            .append("path")
            .attr("d", path)
            .attr("stroke", "black")
            .attr("stroke-width", "0.2")
            .attr("fill", "white")
            .transition().duration(2000)
            .delay(function(d, i) { return i * 5; })
            .ease(d3.easeLinear)
            .attr("fill", function(d) {
            if (!d.properties.HASC_2) {
                return "lightblue";
            } else {
                return populationColor(populationData[d.properties.ID_2]);
            }
            });

        g.selectAll("path")
            .append("title")
            .text(function(d) {
            return d.properties.NAME_2 + " : " + populationData[d.properties.ID_2];
            });
        }

        d3.select(window).on("resize", resize);

        function resize() {
        width = window.innerWidth;
        height = window.innerHeight;

        projection.scale(width * 1.2)
                    .translate([width / 2, height / 2]);

        d3.select("svg")
            .attr("width", width)
            .attr("height", height * 0.8);

        d3.selectAll("path")
            .attr("d", path);
        }

        // Business Impact Chart
        var ctxBusinessImpact = document.getElementById('businessImpactChart').getContext('2d');
        new Chart(ctxBusinessImpact, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
                datasets: [{
                    label: 'Business Impact',
                    data: [10, 20, 30, 40, 50],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    tension: 0.3,
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, // Pastikan aspek rasio tidak dipertahankan
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Progress Advisory Chart
        var ctxProgressAdvisory = document.getElementById('progressAdvisoryChart').getContext('2d');
        new Chart(ctxProgressAdvisory, {
            type: 'pie',
            data: {
                labels: ['Silver', 'Gold', 'Ruby'],
                datasets: [{
                    data: [3, 2, 2],
                    backgroundColor: ['#f3c623', '#23d160', '#ff3860']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true // Pastikan grafik menjaga aspek rasio
            }
        });

        // Progress Business Match Chart
        var ctxProgressBusinessMatch = document.getElementById('progressBusinessMatchChart').getContext('2d');
        new Chart(ctxProgressBusinessMatch, {
            type: 'pie',
            data: {
                labels: ['Closing', 'On Progress', 'Tidak Match'],
                datasets: [{
                    data: [3, 2, 2],
                    backgroundColor: ['#23d160', '#ffdd57', '#ff3860']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });
    </script>
</x-app-layout>