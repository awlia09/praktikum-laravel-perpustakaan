<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku Perpustakaan</h1>
    <a href="/dashboard">← Kembali ke Dashboard</a>
    <hr>
    <ul>
        @foreach($books as $book)
            <li>
                <strong>{{ $book['title'] }}</strong> - {{ $book['author'] }} ({{ $book['category'] }}) 
                | <a href="/books/{{ $book['id'] }}">Lihat Detail</a>
            </li>
        @endforeach
    </ul>
</body>
</html>