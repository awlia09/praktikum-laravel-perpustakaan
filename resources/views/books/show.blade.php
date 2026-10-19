<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Detail Informasi Buku</h1>

        <div class="space-y-3">
            <div>
                <span class="text-sm text-gray-500 block">Judul Buku</span>
                <p class="text-lg font-semibold text-gray-900">{{ $book->title }}</p>
            </div>
            <div>
                <span class="text-sm text-gray-500 block">Penulis</span>
                <p class="text-base text-gray-800">{{ $book->author }}</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <span class="text-sm text-gray-500 block">Tahun Terbit</span>
                    <p class="text-base text-gray-800">{{ $book->year }}</p>
                </div>
                <div>
                    <span class="text-sm text-gray-500 block">Stok Tersedia</span>
                    <p class="text-base text-gray-800">{{ $book->stock }}</p>
                </div>
            </div>
        </div>

        <div class="mt-6 pt-4 border-t">
            <a href="{{ route('books.index') }}" class="inline-block bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
                ← Kembali ke Daftar
            </a>
        </div>
    </div>
</body>
</html>