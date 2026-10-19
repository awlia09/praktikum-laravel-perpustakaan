public function store(Request $request)
{
    $validated = $request->validate([
        'title'  => 'required|string|min:3|max:255|unique:books,title',
        'author' => 'required|string|min:3|max:255',
        'year'   => 'required|integer|digits:4|min:1900|max:2026',
        'stock'  => 'required|integer|min:0|max:1000',
    ]);

    Book::create($validated);

    return redirect()->route('books.index')->with('success', 'Data buku berhasil ditambahkan.');
}