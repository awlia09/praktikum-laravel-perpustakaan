<form action="{{ route('books.store') }}" method="POST">
    @csrf

    {{-- Field Judul Buku --}}
    <div>
        <label for="title">Judul Buku</label>
        <input 
            type="text" 
            id="title" 
            name="title" 
            value="{{ old('title') }}"
        >
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    {{-- Field Penulis --}}
    <div>
        <label for="author">Penulis</label>
        <input 
            type="text" 
            id="author" 
            name="author" 
            value="{{ old('author') }}"
        >
        @error('author')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    {{-- Field Tahun Terbit --}}
    <div>
        <label for="year">Tahun Terbit</label>
        <input 
            type="number" 
            id="year" 
            name="year" 
            value="{{ old('year') }}"
        >
        @error('year')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    {{-- Field Stok Buku --}}
    <div>
        <label for="stock">Stok Buku</label>
        <input 
            type="number" 
            id="stock" 
            name="stock" 
            value="{{ old('stock') }}"
        >
        @error('stock')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit">Simpan Data</button>
</form>