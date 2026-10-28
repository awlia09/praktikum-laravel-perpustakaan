<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Menampilkan daftar semua buku.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Menampilkan form untuk menambah buku baru.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Menyimpan data buku baru dengan aturan validasi.
     */
    public function store(Request $request)
    {
        // Validasi input data sesuai tugas Pertemuan 10
        $validated = $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year'   => 'required|integer|min:1900|max:2026', // Tambahan rule max:2026
            'stock'  => 'required|integer|min:0|max:500',      // Tambahan rule max:500
        ]);

        // Simpan data ke database jika validasi sukses
        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail buku tertentu.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Menampilkan form untuk mengedit buku.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Memperbarui data buku di database.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year'   => 'required|integer|min:1900|max:2026',
            'stock'  => 'required|integer|min:0|max:500',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Data buku berhasil diperbarui!');
    }

    /**
     * Menghapus data buku dari database.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}