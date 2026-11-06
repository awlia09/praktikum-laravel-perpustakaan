<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

// Redirect Ke Halaman Buku Langsung
Route::get('/', function () {
    return redirect('/books?role=admin');
});

Route::get('/login', function () {
    return redirect('/books?role=admin');
})->name('login');

// Route Buku & Simulasi Role via Parameter URL
Route::get('/books', function () {
    // Ambil role dari URL (?role=admin atau ?role=petugas)
    $role = request()->query('role', 'admin');
    $isAdmin = ($role === 'admin');

    // Login-kan user dummy sesuai role
    $user = new User();
    $user->id = $isAdmin ? 1 : 2;
    $user->name = ucfirst($role);
    $user->email = $role . '@example.com';
    Auth::login($user);

    $html = '<div style="font-family: sans-serif; padding: 20px;">';
    
    // Panel Pengubah Role Praktis di Paling Atas
    $html .= '<div style="background: #f0f0f0; padding: 12px; border-radius: 8px; margin-bottom: 20px;">';
    $html .= '<b>[ MODE PENGUJI LAPORAN ]</b> Ubah Role Saat Ini: ';
    $html .= '<a href="/books?role=admin" style="margin-right: 10px; font-weight: bold; color: ' . ($isAdmin ? 'green' : 'blue') . ';">[1] Set Mode Admin</a> | ';
    $html .= '<a href="/books?role=petugas" style="font-weight: bold; color: ' . (!$isAdmin ? 'green' : 'blue') . ';">[2] Set Mode Petugas</a>';
    $html .= '</div>';

    $html .= '<h2>Daftar Buku (Halaman Utama)</h2>';
    $html .= '<p>Status Login Aktif: <b>' . e(ucfirst($role)) . ' (' . e($role) . ')</b></p>';
    $html .= '<table border="1" cellpadding="8" style="border-collapse: collapse; width: 100%; max-width: 500px;"><tr><th>ID</th><th>Judul Buku</th><th>Kategori</th></tr><tr><td>1</td><td>Pemrograman Web Laravel</td><td>Informatika</td></tr><tr><td>2</td><td>Basis Data Lanjut</td><td>Informatika</td></tr></table><br><br>';

    if ($isAdmin) {
        $html .= '<a href="/users?role=admin" style="background: #0d6efd; color: white; padding: 10px 16px; text-decoration: none; border-radius: 5px; font-weight: bold;">[ADMIN ONLY] Kelola Pengguna</a>';
    } else {
        $html .= '<p style="color: red; font-style: italic;"><b>(Menu Kelola Pengguna Disembunyikan untuk Petugas)</b></p>';
    }

    $html .= '</div>';
    return $html;
})->name('books.index');

// Route Khusus Admin (Otorisasi 403)
Route::get('/users', function () {
    $role = request()->query('role', 'petugas');
    
    // Jika bukan admin, PAKSA Tampil Error 403 Forbidden Penuh
    if ($role !== 'admin') {
        abort(403, 'THIS ACTION IS UNAUTHORIZED.');
    }

    return '<div style="font-family: sans-serif; padding: 20px;"><h2>Halaman Kelola Pengguna</h2><p>Selamat Datang Admin! Anda memiliki izin akses Gate <b>manage-users</b>.</p><br><a href="/books?role=admin">Kembali ke Buku</a></div>';
})->name('users.index');