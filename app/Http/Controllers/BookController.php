<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku';

        $books = [
            [
                'title' => 'Pemrograman PHP',
                'author' => 'Andi Pratama',
                'year' => 2021,
            ],
            [
                'title' => 'Laravel untuk Pemula',
                'author' => 'Budi Santoso',
                'year' => 2023,
            ],
            [
                'title' => 'Basis Data',
                'author' => 'Citra Lestari',
                'year' => 2020,
            ],
            [
                'title' => 'Algoritma dan Pemrograman',
                'author' => 'Dewi Anggraini',
                'year' => 2022,
            ],
            [
                'title' => 'Pemrograman Berorientasi Objek',
                'author' => 'Eko Saputra',
                'year' => 2024,
            ],
        ];

        return view('books.index', compact('title', 'books'));
    }
    public function show($id)
    {
    $title = 'Detail Buku';

    return view('books.show', compact('title', 'id'));
    }
}