<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    private function getBooks()
    {
        return [
            ['id' => 1, 'judul' => 'Pemrograman PHP', 'penulis' => 'Andi Nugroho', 'tahun' => 2019],
            ['id' => 5, 'judul' => 'Laravel untuk Pemula', 'penulis' => 'Rizky Pratama', 'tahun' => 2021],
            ['id' => 10, 'judul' => 'Basis Data', 'penulis' => 'Siska Lestari', 'tahun' => 2024],
            ['id' => 15, 'judul' => 'Algoritma dan Pemrograman', 'penulis' => 'Imam Santoso', 'tahun' => 2020],
            ['id' => 20, 'judul' => 'Pemrograman Berorientasi Objek', 'penulis' => 'Devi Maharani', 'tahun' => 2022],
            ['id' => 25, 'judul' => 'Jaringan Komputer Dasar', 'penulis' => 'Eko Prasetyo', 'tahun' => 2017],
            ['id' => 30, 'judul' => 'Rekayasa Perangkat Lunak', 'penulis' => 'Eva Sulistya', 'tahun' => 2023],
            ['id' => 35, 'judul' => 'Analisis Sistem Informasi', 'penulis' => 'Abdul Muh', 'tahun' => 2016],
        ];
    }

    public function index()
    {
        $title = 'Daftar Buku';
        $description = 'Koleksi buku pada Sistem Informasi Perpustakaan.';
        $books = $this->getBooks();
        $stock = 7;

        return view('books.index', compact('title', 'description', 'books', 'stock'));
    }

    public function show($id)
    {
        $books = $this->getBooks();

        $book = null;
        foreach ($books as $item) {
            if ($item['id'] == $id) {
                $book = $item;
            }
        }

        return view('books.show', compact('id', 'book'));
    }
}