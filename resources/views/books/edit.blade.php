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
            <label>Judul<br>
                <input type="text" name="title" value="{{ $book->title }}">
            </label>
        </p>
        <p>
            <label>Penulis<br>
                <input type="text" name="author" value="{{ $book->author }}">
            </label>
        </p>
        <p>
            <label>Tahun<br>
                <input type="number" name="year" value="{{ $book->year }}">
            </label>
        </p>
        <p>
            <label>Stok<br>
                <input type="number" name="stock" value="{{ $book->stock }}">
            </label>
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('books.index') }}">Kembali</a>
    </form>
</body>
</html>