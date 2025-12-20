# Website Profil Organisasi - Hima Persis Garut

Ini adalah *repository* kode untuk website resmi Hima Persis Garut. Project ini dibangun menggunakan Laravel 10 (PHP 8.3) dan Tailwind CSS.

## 🌟 Fitur Utama

Project ini memiliki dua bagian utama: halaman publik (frontend) dan panel admin (backend) untuk mengelola konten.

### Frontend (Halaman Publik)
* **Homepage:** Menampilkan *hero section*, statistik, *testimonials*, dll.
* **Halaman About:** Menampilkan visi, misi, dan "What?" (Tentang Hima Persis) yang dinamis dari admin.
* **Halaman Organization (Team):** Menampilkan daftar anggota/tim.
* **Halaman Blog (Karya Kader):** Menampilkan daftar artikel/karya kader dengan paginasi.
* **Halaman Detail Artikel:** Menampilkan isi artikel, nama penulis (kader), dan tombol download PDF.

### Backend (Admin Panel)
* Sistem otentikasi (Login) untuk admin.
* Sistem **Manajemen Role & Permission** (menggunakan `spatie/laravel-permission`).
* **CRUD** (Create, Read, Update, Delete) lengkap untuk semua modul:
    * Manage Hero Section
    * Manage Statistics
    * Manage Principles
    * Manage Testimonials
    * Manage Clients
    * Manage Teams
    * Manage Abouts (Visi, Misi, What?)
    * Manage Articles (Karya Kader), termasuk upload thumbnail dan PDF.

## 🛠️ Teknologi yang Digunakan
* **Framework:** Laravel 10
* **Frontend:** Tailwind CSS, Blade
* **Database:** MySQL
* **Auth & Roles:** Laravel Breeze, Spatie Laravel Permission
* **Server Lokal:** MAMP (atau XAMPP, Laragon, dll)
* **Build Tool:** Vite

---

## 🚀 Panduan Instalasi Lokal

Langkah-langkah untuk menjalankan *project* ini di komputer lokal.

### 1. Prasyarat
* PHP 8.3+
* Composer
* Node.js (NPM)
* Database (MySQL)

### 2. Instalasi
1.  **Clone *repository* ini:**
    ```bash
    git clone [URL_REPOSITORY_PRIVATE_ANDA]
    cd himapersis-garut
    ```

2.  **Install dependensi PHP:**
    ```bash
    composer install
    ```

3.  **Install dependensi JavaScript:**
    ```bash
    npm install
    ```

4.  **Setup File Environment:**
    Salin file `.env.example` menjadi `.env`.
    ```bash
    cp .env.example .env
    ```

5.  **Konfigurasi `.env`:**
    Buka file `.env` dan atur koneksi *database* Anda:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=himapersis_garut
    DB_USERNAME=root
    DB_PASSWORD=root
    ```
    *(Sesuaikan `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` dengan pengaturan MAMP/XAMPP Anda)*

6.  **Generate Kunci Aplikasi:**
    ```bash
    php artisan key:generate
    ```

7.  **Buat Storage Link:**
    Ini penting agar file yang di-upload (thumbnail, PDF) bisa diakses publik.
    ```bash
    php artisan storage:link
    ```

8.  **Migrasi & Seeding Database:**
    Perintah ini akan membuat semua tabel *database* dan mengisi data awal (termasuk akun admin). **Ini akan menghapus data lama jika ada.**
    ```bash
    php artisan migrate:fresh --seed
    ```

### 3. Menjalankan Project
Buka 2 terminal:

1.  **Terminal 1 (Vite/Tailwind):**
    ```bash
    npm run dev
    ```

2.  **Terminal 2 (Server Laravel):**
    ```bash
    php artisan serve
    ```

Buka `http://127.0.0.1:8000` di *browser* Anda.

---

## 🔐 Akses Admin
* **URL Login:** `http://127.0.0.1:8000/login`
* **Akun Admin Default:**
    * **Email:** Cek file `database/seeders/RolePermissionSeeder.php` Anda (Contoh: `super@admin.com`)
    * **Password:** Cek file `database/seeders/RolePermissionSeeder.php` Anda (Contoh: `123123123`)
