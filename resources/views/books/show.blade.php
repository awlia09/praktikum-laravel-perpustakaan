<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
</head>
<body>
    <h1>{{ $book['title'] }}</h1>
    <p><strong>Penulis:</strong> {{ $book['author'] }}</p>
    <p><strong>Kategori:</strong> {{ $book['category'] }}</p>
    <p><strong>Deskripsi:</strong> {{ $book['description'] }}</p>
    <hr>
    <a href="/books">← Kembali ke Daftar Buku</a>
</body>
</html>