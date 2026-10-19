<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Form Edit Buku</h1>

        <form action="{{ route('books.update', $book) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Judul Buku</label>
                <input type="text" name="title" value="{{ $book->title }}" required class="w-full mt-1 p-2 border rounded border-gray-300">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Penulis</label>
                <input type="text" name="author" value="{{ $book->author }}" required class="w-full mt-1 p-2 border rounded border-gray-300">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Tahun Terbit</label>
                    <input type="number" name="year" value="{{ $book->year }}" required class="w-full mt-1 p-2 border rounded border-gray-300">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Stok</label>
                    <input type="number" name="stock" value="{{ $book->stock }}" required class="w-full mt-1 p-2 border rounded border-gray-300">
                </div>
            </div>

            <div class="flex justify-between items-center pt-4">
                <a href="{{ route('books.index') }}" class="text-gray-600 hover:underline">Batal</a>
                <button type="submit" class="bg-amber-600 text-white px-4 py-2 rounded hover:bg-amber-700">Update Data</button>
            </div>
        </form>
    </div>
</body>
</html>