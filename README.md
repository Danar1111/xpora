
# Xpora Laravel Project

## Deskripsi Proyek

Xpora adalah sebuah proyek berbasis Laravel yang dirancang untuk mengelola data pengguna dan memberikan fitur pelaporan berbasis web untuk ekspor. Proyek ini bertujuan untuk memberikan solusi yang efisien dan modern dengan menggunakan framework Laravel.

## Fitur Utama

- CRUD
- Import Data
- Export to Excel
- Export to PDF
- Visualisasi map

## Teknologi yang Digunakan

Proyek ini menggunakan teknologi berikut:

1. **Laravel**:
   - **Lokasi**: Seluruh framework.
   - **Penggunaan**: Digunakan untuk membangun back-end, routing, dan manajemen database.

2. **MySQL**:
   - **Lokasi**: File konfigurasi database di `.env`.
   - **Penggunaan**: Sebagai basis data utama untuk menyimpan informasi pengguna, data laporan, dan lainnya.

3. **Laravel Blade**:
   - **Lokasi**: `resources/views/`.
   - **Penggunaan**: Template engine untuk merender halaman HTML dengan data dinamis.

4. **Laravel Mix**:
   - **Lokasi**: `webpack.mix.js`.
   - **Penggunaan**: Untuk mengelola aset front-end seperti CSS dan JavaScript.

5. **Bootstrap**:
   - **Lokasi**: Diimpor di file Blade atau di assets front-end.
   - **Penggunaan**: Untuk mempercantik tampilan antarmuka pengguna.

6. **JavaScript**:
   - **Lokasi**: `resources/js/`.
   - **Penggunaan**: Untuk fitur interaktif di sisi klien.

7. **CSS**:
   - **Lokasi**: `resources/css/`.
   - **Penggunaan**: Untuk styling halaman aplikasi.

8. **Seeder dan Factory**:
   - **Lokasi**: `database/seeders/` dan `database/factories/`.
   - **Penggunaan**: Untuk menghasilkan data uji secara otomatis.

---
## Fungsi-Fungsi di Controller

Berikut adalah penjelasan fungsi utama di controller:

1. **UserController**:
   - `index()`: Menampilkan daftar semua pengguna.
   - `create()`: Menampilkan formulir untuk menambahkan pengguna baru.
   - `store(Request $request)`: Memproses dan menyimpan data pengguna baru ke dalam database.
   - `edit($id)`: Menampilkan formulir untuk mengedit data pengguna tertentu.
   - `update(Request $request, $id)`: Memperbarui data pengguna berdasarkan input dari formulir.
   - `destroy($id)`: Menghapus data pengguna tertentu dari database.

2. **ReportController**:
   - `index()`: Menampilkan daftar laporan yang tersedia.
   - `show($id)`: Menampilkan detail laporan tertentu.
   - `generate(Request $request)`: Menghasilkan laporan baru berdasarkan data masukan pengguna.

3. **AuthController**:
   - `login(Request $request)`: Memverifikasi kredensial pengguna dan memberikan akses ke aplikasi.
   - `logout()`: Mengakhiri sesi pengguna yang sedang aktif.
   - `register(Request $request)`: Membuat akun baru untuk pengguna.

4. **DashboardController**:
   - `index()`: Menampilkan data ringkasan untuk pengguna di dashboard.

---
# Penjelasan Controller: AdvisoryController
karena beberapa controller menggunakan teknologi yang sama, maka diambil contoh AdvisoryController untuk penjelasan.

## Deskripsi
AdvisoryController bertanggung jawab untuk mengelola layanan advisory, termasuk membuat, mengedit, menghapus, dan menampilkan data advisory. Selain itu, controller ini menyediakan fitur ekspor data ke format Excel dan PDF, serta mengimpor data dari file Excel.

## Fungsi Utama

### **1. advisory()**
- **Deskripsi**: Menampilkan daftar semua layanan advisory yang ada.
- **Output**: View `dashboard.advisory` dengan data `advisory`.

### **2. addadvisory()**
- **Deskripsi**: Menampilkan formulir untuk menambahkan layanan advisory baru.
- **Output**: View `advisory/daftar` dengan data `provinces` dan `regencies`.

### **3. store(Request $request)**
- **Deskripsi**: Menyimpan layanan advisory baru ke dalam database.
- **Validasi Input**:
  - `training_date`: Wajib, format tanggal.
  - `proposal_no`: Wajib, string, maksimal 255 karakter.
  - Dan atribut lainnya.
- **Output**: Redirect ke `/dashboard/advisory` setelah data disimpan.

### **4. destroy($id)**
- **Deskripsi**: Menghapus layanan advisory tertentu berdasarkan `id`.
- **Output**: Redirect ke `advisory` dengan pesan sukses.

### **5. detail($id)**
- **Deskripsi**: Menampilkan detail lengkap dari layanan advisory tertentu.
- **Output**: View `advisory.detail` dengan data `advisory`.

### **6. edit($id)**
- **Deskripsi**: Menampilkan formulir untuk mengedit layanan advisory tertentu.
- **Output**: View `advisory.edit` dengan data `advisory`, `provinces`, dan `regencies`.

### **7. update(Request $request, $id)**
- **Deskripsi**: Memperbarui layanan advisory di database berdasarkan input.
- **Validasi Input**:
  - Sama seperti fungsi `store`.
- **Output**: View `advisory.detail` dengan data yang telah diperbarui.

### **8. export_excel()**
- **Deskripsi**: Mengekspor semua data advisory ke file Excel.
- **Output**: File `Advisory.xlsx` yang dapat diunduh.

### **9. importdata()**
- **Deskripsi**: Menampilkan halaman untuk mengimpor data advisory.
- **Output**: View `advisory.import`.

### **10. import_proses(Request $request)**
- **Deskripsi**: Memproses dan menyimpan data advisory dari file Excel yang diunggah.
- **Output**: Redirect ke `/dashboard/advisory` setelah data diimpor.

### **11. exportPDF()**
- **Deskripsi**: Mengekspor semua data advisory ke file PDF.
- **Output**: File PDF `advisory_report.pdf` yang ditampilkan di browser.

## Alur Data
- **View yang Digunakan**:
  - `dashboard.advisory`: Menampilkan daftar advisory.
  - `advisory/daftar`: Formulir tambah advisory.
  - `advisory.detail`: Menampilkan detail advisory.
  - `advisory.edit`: Formulir edit advisory.
  - `advisory.import`: Halaman impor advisory.
  - `advisory.export_pdf`: Template untuk PDF.

- **Model yang Digunakan**:
  - `Advisory`: Untuk mengelola data advisory.
  - `Province`: Untuk daftar provinsi.
  - `Regency`: Untuk daftar kabupaten/kota.

- **Ekspor dan Impor**:
  - **Excel**: Menggunakan `Maatwebsite\Excel`.
  - **PDF**: Menggunakan `Barryvdh\DomPDF`.

## Dependencies
- `Maatwebsite\Excel`: Untuk ekspor dan impor file Excel.
- `Barryvdh\DomPDF`: Untuk menghasilkan file PDF.

---

## Teknologi Visualisasi

### **1. Visualisasi Peta (Map)**
Proyek ini menggunakan **Leaflet.js** untuk menampilkan peta interaktif yang memvisualisasikan data geospasial.

- **Library**: 
  - [Leaflet.js](https://leafletjs.com/)
  - Data GeoJSON diambil dari `public/geojson/id.json`.

- **Fitur yang Digunakan**:
  - **Pusat Peta**: Peta berpusat di koordinat `[-2.5489, 118.0149]` dengan zoom level `6`.
  - **Penyesuaian Wilayah**: Wilayah pada peta diberikan warna berdasarkan kategori (misalnya, Sumatera, Jawa, Papua).
  - **Tooltip Interaktif**: Setiap wilayah menampilkan tooltip berisi jumlah debitur dan nilai total.

- **Implementasi Utama**:
```javascript
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

fetch('/geojson/id.json')
    .then(response => response.json())
    .then(data => {
        L.geoJSON(data, {
            style: function(feature) {
                // Styling wilayah berdasarkan properti GeoJSON
                return { fillColor: '#00b0f0', fillOpacity: 1, weight: 1 };
            },
            onEachFeature: function(feature, layer) {
                // Menambahkan tooltip ke setiap wilayah
                layer.bindTooltip(`Wilayah: ${feature.properties.name}`, { permanent: true });
            }
        }).addTo(map);
    });
```

### **2. Visualisasi Grafik (Chart.js)**
File menggunakan **Chart.js** untuk menampilkan grafik batang (bar chart) dan garis (line chart) secara dinamis.

- **Library**:
  - [Chart.js](https://www.chartjs.org/)
  
- **Fitur Grafik**:
  - **Grafik BD Kredit dan CASA**:
    - Menampilkan data pertumbuhan kredit ekspor (`BD Kredit`) dan total saldo kas (`CASA`).
    - Data dinamis diambil dari JavaScript.
  - **Opsi Grafik**:
    - Responsif dengan pengaturan rasio aspek.

#### **Implementasi Utama**
```javascript
const chartData = {
    bdKredit: {
        labels: ['Dec 21', 'Jun 22', 'Dec 22', 'Sep 23'],
        datasets: [{
            label: 'BD Kredit',
            data: [18.1, 22.0, 26.7, 32.3],
            backgroundColor: ['#4472c4', '#8fd6cb', '#8fd6cb', '#4472c4']
        }]
    },
    casa: {
        labels: ['Dec 21', 'Jun 22', 'Dec 22', 'Sep 23'],
        datasets: [{
            label: 'CASA',
            data: [3.0, 3.9, 4.1, 4.4],
            backgroundColor: ['#4472c4', '#8fd6cb', '#8fd6cb', '#4472c4']
        }]
    }
};

new Chart(document.getElementById('bdKreditChart'), {
    type: 'bar',
    data: chartData.bdKredit,
    options: { responsive: true, maintainAspectRatio: true }
});

new Chart(document.getElementById('casaChart'), {
    type: 'bar',
    data: chartData.casa,
    options: { responsive: true, maintainAspectRatio: true }
});
```
---
## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda:

1. Clone repositori ini:
   ```bash
   git clone https://github.com/Danar1111/xpora.git
   ```

2. Masuk ke direktori proyek:
   ```bash
   cd xpora
   ```

3. Instal dependensi menggunakan Composer:
   ```bash
   composer install
   ```

4. Instal dependensi front-end (jika menggunakan Laravel Mix atau alat front-end lainnya):
   ```bash
   npm install
   ```

5. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi:
   ```bash
   cp .env.example .env
   ```

6. Generate kunci aplikasi:
   ```bash
   php artisan key:generate
   ```

7. Migrasi database:
   ```bash
   php artisan migrate
   ```

8. (Opsional) Seed database dengan data awal:
   ```bash
   php artisan db:seed
   ```

9. Jalankan server pengembangan:
   ```bash
   php artisan serve
   ```

10. Akses aplikasi di browser:
    ```
    http://localhost:8000
    ```
--- 
## Struktur Direktori Penting

- `app/` - Berisi logika aplikasi.
- `routes/` - Berisi definisi rute aplikasi.
- `resources/` - Berisi file view, CSS, dan JavaScript.
- `database/` - Berisi migrasi, seeder, dan file database.
- `public/` - Berisi file yang diakses publik seperti index.php.

---

Terima kasih telah menggunakan proyek ini! Semoga bermanfaat.
