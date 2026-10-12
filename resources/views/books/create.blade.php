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
            <label>Judul<br>
                <input type="text" name="title">
            </label>
        </p>
        <p>
            <label>Penulis<br>
                <input type="text" name="author">
            </label>
        </p>
        <p>
            <label>Tahun<br>
                <input type="number" name="year">
            </label>
        </p>
        <p>
            <label>Stok<br>
                <input type="number" name="stock">
            </label>
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
</body>
</html>