-- Setup database untuk Modul 05B
-- Gunakan database Sesi 4 yang sama: web_programming_1
-- Tidak menghapus data yang sudah ada.
CREATE DATABASE IF NOT EXISTS web_programming_1 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE web_programming_1;

-- Tabel mahasiswa dibuat hanya jika belum tersedia.
-- Struktur ini sesuai dengan data_mahasiswa.php dari project yang kamu berikan.
CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(30) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    program_studi VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Tabel akun login baru; tabel mahasiswa lama tetap dipertahankan.
CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Setelah mengimpor SQL ini, jalankan http://localhost/web-programming-session4/buat_user.php
-- untuk membuat user latihan admin / admin123 dengan password yang di-hash.
