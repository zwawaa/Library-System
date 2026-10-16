<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';
        $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';
        $books = Book::all();

        return view('books.index', compact(
            'title',
            'description',
            'books'
        ));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:2|max:255|unique:books,title',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:2000|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:100',

        ]);

        Book::create($validated);

        return redirect()->route('books.index')
        ->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:2|max:255|unique:books,title,' . $book->id,
            'author' => 'required|string|max:255',
            'year' =>'required|integer|min:2000|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:100',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')
        ->with('success', 'Data buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}