<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Andi Nugroho',
            'year' => 2019,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Rizky Pratama',
            'year' => 2021,
            'stock' => 8,
        ]);

        Book::create([
            'title' => 'Basis Data',
            'author' => 'Siti Aminah',
            'year' => 2018,
            'stock' => 3,
        ]);

        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Budi Santoso',
            'year' => 2020,
            'stock' => 6,
        ]);

        Book::create([
            'title' => 'Pemrograman Berorientasi Objek',
            'author' => 'Dewi Lestari',
            'year' => 2022,
            'stock' => 4,
        ]);

        Book::create([
            'title' => 'Jaringan Komputer Dasar',
            'author' => 'Eko Prasetyo',
            'year' => 2017,
            'stock' => 0,
        ]);
    }
}