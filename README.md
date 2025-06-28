# 🧠 TemuDataku Backend – Technical Test (Full Stack Developer Intern)

Halo Tim TemuDataku 👋,

Terima kasih atas kesempatan yang diberikan. Ini adalah repository backend untuk mini web-app **TemuDataku** yang saya kerjakan sebagai bagian dari technical test program internship Full Stack Developer Batch 2 – 2025.

## ✨ Deskripsi Singkat

Project backend ini mencakup fitur:
- **Autentikasi user (simulasi login)**
- **Katalog produk TemuDataku**
- **Manajemen kategori & subkategori**
- **Cart (keranjang belanja) pribadi per pengguna**
- Semua data dummy sudah di-*seed* secara otomatis.

---

## ⚙️ Cara Instalasi & Menjalankan Backend

Ikuti langkah-langkah berikut untuk menjalankan project ini secara lokal:

1. **Clone repository ini** ke dalam direktori lokal:
   
   ```bash
   git clone <url-repo-anda>](https://github.com/OnyanPokon/temudataku-be.git
2. Buat database baru di MySQL dengan nama:
   
   ```bash
   temudataku_db
3. Salin file .env.example menjadi .env:
4. Install seluruh dependency Laravel:

   ```bash
   composer install
5. Generate app key Laravel (jika belum):
   
   ```bash
   php artisan key:generate
6. Migrasi dan seed database untuk mengisi data awal:
   
    ```bash
   php artisan migrate:fresh --seed
7. Jalankan project lokal:

   ```bash
   php artisan serve

