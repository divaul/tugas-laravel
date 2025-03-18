# Biodata Mahasiswa

Sebuah aplikasi sederhana untuk mengelola data mahasiswa menggunakan framework Laravel.

## Demo

![Demo Aplikasi](assets/demo-image.jpg)

> *Gambar di atas menunjukkan tampilan aplikasi. Ganti `assets/demo-image.jpg` dengan path gambar yang sesuai.*

## Fitur

- CRUD Data Mahasiswa
- Validasi Data Masukan
- Pencarian dan Filter Data
- Pagination
- Ekspor Data (Excel/PDF)

## Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek secara lokal:

```bash
# 1. Clone repositori
git clone https://github.com/username/biodata-mahasiswa.git

# 2. Masuk ke direktori proyek
cd biodata-mahasiswa

# 3. Install dependensi
composer install

# 4. Salin file .env dan sesuaikan konfigurasi
cp .env.example .env

# 5. Generate aplikasi key
php artisan key:generate

# 6. Buat database baru dan migrasi tabel
php artisan migrate

# 7. Jalankan server lokal
php artisan serve

#8. Jalankan pada
http://localhost:8000/mahasiswa

