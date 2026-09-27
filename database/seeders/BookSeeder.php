<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Pemrograman PHP',
                'author' => 'Andi',
                'year' => 2024,
                'stock' => 5,
            ],
            [
                'title' => 'Laravel untuk Pemula',
                'author' => 'Budi',
                'year' => 2023,
                'stock' => 10,
            ],
            [
                'title' => 'Basis Data',
                'author' => 'Citra',
                'year' => 2022,
                'stock' => 7,
            ],
            [
                'title' => 'Cloud Computing',
                'author' => 'Dedi',
                'year' => 2024,
                'stock' => 8,
            ],
            [
                'title' => 'Jaringan Komputer',
                'author' => 'Eko',
                'year' => 2021,
                'stock' => 12,
            ],
        ];

        foreach ($books as $book) {
            Book::firstOrCreate(
                ['title' => $book['title']],
                $book
            );
        }
    }
}
