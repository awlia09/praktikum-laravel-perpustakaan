<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP Dasar',
            'author' => 'Aulia',
            'year' => 2021,
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Nazwa',
            'year' => 2022,
            'stock' => 15,
        ]);

        Book::create([
            'title' => 'Belajar MySQL Dasar',
            'author' => 'Citra',
            'year' => 2020,
            'stock' => 8,
        ]);

        Book::create([
            'title' => 'Pemrograman Web Dasar',
            'author' => 'Tasya',
            'year' => 2023,
            'stock' => 12,
        ]);

        Book::create([
            'title' => 'Struktur Data & Algoritma',
            'author' => 'Tania',
            'year' => 2021,
            'stock' => 5,
        ]);
    }
}