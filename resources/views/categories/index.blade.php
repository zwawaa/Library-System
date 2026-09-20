@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')
    <h2>{{ $title }}</h2>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ul>
@endsection<h1>Daftar Categories</h1>
<p>Mata Kuliah</p>
