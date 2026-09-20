@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    @if($stock > 0)
        <p>Buku tersedia. Sisa stok: {{ $stock }}</p>
    @else
        <p>Buku sedang habis.</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>

        @foreach($books as $book)
            <tr>
                <td>{{ $book['id'] }}</td>
                <td>{{ $book['judul'] }}</td>
                <td>{{ $book['penulis'] }}</td>
                <td>{{ $book['tahun'] }}</td>
                <td><a href="/books/{{ $book['id'] }}">Detail</a></td>
            </tr>
        @endforeach
    </table>
@endsection