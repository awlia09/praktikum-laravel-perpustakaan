<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="number"], select { width: 100%; max-width: 400px; padding: 8px; box-sizing: border-box; }
        .btn { padding: 8px 16px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .btn-secondary { background: #6c757d; text-decoration: none; display: inline-block; padding: 8px 16px; border-radius: 4px; color: white; margin-left: 5px; }
        .error { color: red; font-size: 14px; margin-top: 5px; }
    </style>
</head>
<body>

    <h1>Edit Data Buku</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Judul Buku</label>
            <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}" required>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="author">Penulis</label>
            <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}" required>
            @error('author')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="year">Tahun Terbit</label>
            <input type="number" name="year" id="year" value="{{ old('year', $book->year) }}" required>
            @error('year')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="stock">Stok</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock', $book->stock) }}" required>
            @error('stock')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id) == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn">Perbarui Buku</button>
        <a href="{{ route('books.index') }}" class="btn-secondary">Batal</a>
    </form>

</body>
</html>