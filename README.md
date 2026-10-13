# Kelasqu

Aplikasi kelas online sederhana berbasis Laravel 10, Bootstrap 5, dan MySQL. Tersedia landing page, pendaftaran dan login, dashboard pembelajar, dashboard admin, serta data contoh kursus.

## Persyaratan

- PHP 8.1 atau lebih baru beserta ekstensi `pdo_mysql`
- Composer
- MySQL

## Menjalankan aplikasi

1. Buat database MySQL bernama `kelasqu`.
2. Salin `.env.example` menjadi `.env`, lalu sesuaikan koneksi database dan `KELASQU_ADMIN_EMAIL` serta `KELASQU_ADMIN_PASSWORD`.
3. Instal dependency dan siapkan aplikasi:

   ```bash
   composer install
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve
   ```

4. Buka alamat yang ditampilkan oleh `php artisan serve`.

Seeder membuat akun admin dan empat contoh kursus. Nilai admin awal di `.env.example` hanya untuk pengembangan lokal; ganti dengan kata sandi kuat sebelum aplikasi dipakai di lingkungan lain. Pendaftaran publik selalu membuat akun dengan role `user`.

## Halaman

- `/` — landing page
- `/register` dan `/login` — autentikasi pengguna
- `/dashboard` — dashboard pembelajar
- `/admin/dashboard` — dashboard administrator (memerlukan role `admin`)

Tampilan memakai Bootstrap dari CDN. Koneksi internet dibutuhkan untuk memuat aset Bootstrap, Bootstrap Icons, dan font.
