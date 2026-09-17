<!DOCTYPE html>
<html>
<head>
    <title>Kategori Buku</title>
</head>
<body>
    <h1>Kategori Buku</h1>
    <a href="/dashboard">← Kembali ke Dashboard</a>
    <hr>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ul>
</body>
</html>