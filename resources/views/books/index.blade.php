<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku - CRUD Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Buku Perpustakaan</h1>
            <a href="{{ route('books.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                + Tambah Buku
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-50 text-left text-xs font-semibold text-gray-600 uppercase border-b">
                    <th class="p-3">No</th>
                    <th class="p-3">Judul Buku</th>
                    <th class="p-3">Penulis</th>
                    <th class="p-3">Tahun</th>
                    <th class="p-3">Stok</th>
                    <th class="p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $index => $book)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3">{{ $index + 1 }}</td>
                        <td class="p-3 font-medium text-gray-900">{{ $book->title }}</td>
                        <td class="p-3 text-gray-600">{{ $book->author }}</td>
                        <td class="p-3 text-gray-600">{{ $book->year }}</td>
                        <td class="p-3 text-gray-600">{{ $book->stock }}</td>
                        <td class="p-3 text-center space-x-2">
                            <a href="{{ route('books.show', $book) }}" class="bg-gray-500 text-white px-3 py-1 rounded text-sm hover:bg-gray-600">Detail</a>
                            <a href="{{ route('books.edit', $book) }}" class="bg-amber-500 text-white px-3 py-1 rounded text-sm hover:bg-amber-600">Edit</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded text-sm hover:bg-red-700">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-4 text-center text-gray-500">Belum ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>