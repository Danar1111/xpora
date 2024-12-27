
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

## Struktur Direktori Penting

- `app/` - Berisi logika aplikasi.
- `routes/` - Berisi definisi rute aplikasi.
- `resources/` - Berisi file view, CSS, dan JavaScript.
- `database/` - Berisi migrasi, seeder, dan file database.
- `public/` - Berisi file yang diakses publik seperti index.php.

---

Terima kasih telah menggunakan proyek ini! Semoga bermanfaat.
