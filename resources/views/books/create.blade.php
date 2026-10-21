<div>
    <label for="category_id">Kategori</label>
    <select name="category_id" id="category_id">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <p style="color: red;">{{ $message }}</p>
    @enderror
</div>