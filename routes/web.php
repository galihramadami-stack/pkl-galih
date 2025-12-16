<?php
// ========================================
// FILE: routes/web.php
// FUNGSI: Mendefinisikan URL routes aplikasi
// ========================================

use Illuminate\Support\Facades\Route;

// Route default (sudah ada)
Route::get('/', function () {
    return view('welcome');
});


Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/sapa', function () {
    return "Halo, $nama! selamat datang di aplikasi kami!";

});
// ================================================
// PARAMETER OPSIONAL DENGAN NILAI DEFAULT
// ================================================

Route::get('/kategori/{nama?}', function ($nama = 'Semua') {
    // ↑ {nama?} = Tanda ? berarti parameter OPSIONAL
    // ↑ $nama = 'Semua' = Nilai default jika parameter tidak diberikan

    return "Menampilkan kategori: $nama";
});

// CARA AKSES:
// http://localhost:8000/kategori
// Output: "Menampilkan kategori: Semua" (menggunakan default)

// http://localhost:8000/kategori/Elektronik
// Output: "Menampilkan kategori: Elektronik"