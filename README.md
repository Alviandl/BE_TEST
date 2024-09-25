# README - API Sistem Manajemen Perpustakaan
Implementasi RESTful API sederhana untuk sistem manajemen perpustakaan yang menangani data buku dan penulis. API ini mencakup fitur untuk membuat, membaca, memperbarui, dan menghapus data penulis serta buku, serta mengambil semua buku yang ditulis oleh penulis tertentu.

# Teknologi yang Digunakan
Framework: CodeIgniter 4
Bahasa: PHP 8.2
Database: MySQL
Testing Framework: PHPUnit

# Cara Menjalankan Aplikasi
1. Persyaratan Sistem
    PHP >= 7.4
    Composer
    MySQL (atau database lain yang kompatibel)
    XAMPP atau LAMP (opsional untuk server lokal)

2. Instalasi
   - Download Source code dan database dengan nama "testbeckend.sql" pada link github ini.
   - Instal aplikasi yang sudah didownload tadi sesuai lokasi instal php/xampp
   - Import datatabase yang ada pada sourcecode tersebut dengan nama testbeckend.sql .

3. Menjalankan Aplikasi
   - Run Apache & Mysql diXAMPP di PC/Laptop 
   - Ketikan -> php spark serve <- pada terminal pada VScode jika anda menggunakan VScode sesuai path folder aplikasinya 

4. Menjalankan Unit Test
   - Jalankan perintah berikut untuk menjalankan unit test: php vendor/bin/phpunit
   - Untuk file lokasi unit test ada di : BE_TEST/app/test/mytest/controllers/

5. Selain dengan Unit Test bisa dengan menggunakan POSTMAN untuk melakukan pengujian API
