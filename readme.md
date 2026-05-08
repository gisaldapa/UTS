# Aplikasi CRUD Data Mahasiswa - UTS Pemrograman Web

Aplikasi web sederhana berbasis PHP Native untuk mengelola data mahasiswa di lingkungan kampus. Proyek ini dibuat untuk memenuhi tugas Ujian Tengah Semester (UTS) dengan implementasi fungsi CRUD (Create, Read, Update, Delete) dan fitur unggah gambar.

## 📌 Fitur Utama
- **Create**: Menambah data mahasiswa baru beserta foto profil.
- **Read**: Menampilkan daftar mahasiswa dalam bentuk tabel yang rapi.
- **Update**: Mengubah data mahasiswa yang sudah ada (termasuk mengganti foto).
- **Delete**: Menghapus data mahasiswa dari database dan menghapus file foto terkait.
- **Validasi JavaScript**: Pengecekan field kosong, tipe file (JPG/PNG), dan ukuran file (Maks 2MB) di sisi klien.
- **Validasi Backend**: Keamanan tambahan di sisi server untuk proses unggah file.

## 🛠️ Teknologi yang Digunakan
- **Bahasa Pemrograman**: PHP 8.x (Native)
- **Database**: MySQL
- **Frontend**: HTML5, CSS3 (Internal Styling)
- **Scripting**: JavaScript (Vanilla JS)
- **Server**: Apache (via XAMPP/Laragon)

## 📁 Struktur Folder
- `uploads/`: Direktori penyimpanan file foto mahasiswa.
- `koneksi.php`: Konfigurasi koneksi database menggunakan MySQLi.
- `index.php`: Halaman utama daftar data.
- `form.php`: Form input untuk tambah dan edit data.
- `proses.php`: Logika pemrosesan data dan manajemen file.
- `script.js`: Logika validasi dan interaksi frontend.
- `db_kampus.sql`: File ekspor database.

## 🚀 Cara Menjalankan
1. Clone atau download repository ini.
2. Masukkan folder ke dalam direktori `htdocs` (XAMPP) atau `www` (Laragon).
3. Buat database baru bernama `db_kampus` di phpMyAdmin.
4. Import file `db_kampus.sql` ke dalam database tersebut.
5. Pastikan terdapat folder bernama `uploads` di dalam direktori proyek.
6. Akses melalui browser di alamat `http://localhost/uts`.

---
**Dibuat Oleh:** [Nama Lengkap Anda]  
**NIM:** [NIM Anda]  
**Kampus:** Universitas Muhammadiyah Sukabumi (UMMI)