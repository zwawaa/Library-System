<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
</head>
<body>
    <h1>Detail Buku</h1>

    <table cellpadding="6">
        <tr><th align="left">Judul</th><td>{{ $book->title }}</td></tr>
        <tr><th align="left">Penulis</th><td>{{ $book->author }}</td></tr>
        <tr><th align="left">Tahun</th><td>{{ $book->year }}</td></tr>
        <tr><th align="left">Stok</th><td>{{ $book->stock }}</td></tr>
    </table>

    <p>
        <a href="{{ route('books.edit', $book) }}">Edit</a> |
        <a href="{{ route('books.index') }}">Kembali</a>
    </p>
</body>
</html>