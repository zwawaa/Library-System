<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Judul Buku</label><br>
            <input type="text" name="title" value="{{ old('title', $book->title) }}">
            @error('title') <br><small>{{ $message }}</small> @enderror
        </p>

        <p>
            <label>Penulis</label><br>
            <input type="text" name="author" value="{{ old('author', $book->author) }}">
            @error('author') <br><small>{{ $message }}</small> @enderror
        </p>

        <p>
            <label>Kategori</label><br>
            <select name="category_id">
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <br><small style="color:red;">{{ $message }}</small> @enderror
        </p>

        <p>
            <label>Tahun Terbit</label><br>
            <input type="text" name="year" value="{{ old('year', $book->year) }}">
            @error('year') <br><small>{{ $message }}</small> @enderror
        </p>

        <p>
            <label>Stok</label><br>
            <input type="text" name="stock" value="{{ old('stock', $book->stock) }}">
            @error('stock') <br><small>{{ $message }}</small> @enderror
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
</body>
</html>