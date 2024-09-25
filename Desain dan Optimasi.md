-- Desain dan Optimasi
# Desain API
    - Disini saya menerapkan menggunakan framework Codeigniter 4 dengan API menggunakan pola arsitektur RESTful, di mana setiap resource (penulis dan buku) memiliki endpoint CRUD standar.
    - Model: Terdapat dua model utama AuthorModel dan BookModel untuk menangani operasi database terkait penulis dan buku.
    - Controller: AuthorController dan BookController mengelola logika bisnis API.

# Optimasi Performa
    - Disini Saya menerapkan query optimasi indexing pada kolom author_id di tabel buku untuk mempercepat query ketika mengambil semua buku berdasarkan penulis.