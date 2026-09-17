<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'category' => 'Novel'],
            ['id' => 2, 'title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'category' => 'Sejarah'],
            ['id' => 3, 'title' => 'Filosofi Teras', 'author' => 'Henry Manampiring', 'category' => 'Pengembangan Diri'],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = [
            'id' => $id,
            'title' => 'Detail Buku #' . $id,
            'author' => 'Penulis Contoh',
            'category' => 'Kategori Contoh',
            'description' => 'Ini adalah deskripsi lengkap untuk buku dengan ID ' . $id
        ];

        return view('books.show', compact('book'));
    }
}