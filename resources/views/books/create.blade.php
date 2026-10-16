<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
<h1>Tambah Buku</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <p>
        <label>Judul Buku</label><br>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title') <br><small>{{ $message }}</small> @enderror
    </p>

    <p>
        <label>Penulis</label><br>
        <input type="text" name="author" value="{{ old('author') }}">
        @error('author') <br><small>{{ $message }}</small> @enderror
    </p>

    <p>
        <label>Tahun Terbit</label><br>
        <input type="text" name="year" value="{{ old('year') }}">
        @error('year') <br><small>{{ $message }}</small> @enderror
    </p>

    <p>
        <label>Stok</label><br>
        <input type="text" name="stock" value="{{ old('stock') }}">
        @error('stock') <br><small>{{ $message }}</small> @enderror
    </p>

    <button type="submit">Simpan</button>
    <a href="{{ route('books.index') }}">Kembali</a>
</form>
</body>
</html>