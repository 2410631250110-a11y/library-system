<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|digits:4',
            'stock' => 'required|integer|min:0',
        ], [
            'title.required' => 'Judul wajib diisi.',
            'title.string' => 'Judul harus berupa teks.',
            'title.max' => 'Judul maksimal 255 karakter.',
            'author.required' => 'Penulis wajib diisi.',
            'author.string' => 'Penulis harus berupa teks.',
            'author.max' => 'Penulis maksimal 255 karakter.',
            'year.required' => 'Tahun wajib diisi.',
            'year.integer' => 'Tahun harus berupa bilangan bulat.',
            'year.min' => 'Tahun minimal 1900.',
            'year.digits' => 'Tahun harus terdiri dari 4 digit.',
            'stock.required' => 'Stok wajib diisi.',
            'stock.integer' => 'Stok harus berupa bilangan bulat.',
            'stock.min' => 'Stok minimal 0.',
        ]);

        Book::create($validated);

        return redirect()->route('books.index');
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
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|digits:4',
            'stock' => 'required|integer|min:0',
        ], [
            'title.required' => 'Judul wajib diisi.',
            'title.string' => 'Judul harus berupa teks.',
            'title.max' => 'Judul maksimal 255 karakter.',
            'author.required' => 'Penulis wajib diisi.',
            'author.string' => 'Penulis harus berupa teks.',
            'author.max' => 'Penulis maksimal 255 karakter.',
            'year.required' => 'Tahun wajib diisi.',
            'year.integer' => 'Tahun harus berupa bilangan bulat.',
            'year.min' => 'Tahun minimal 1900.',
            'year.digits' => 'Tahun harus terdiri dari 4 digit.',
            'stock.required' => 'Stok wajib diisi.',
            'stock.integer' => 'Stok harus berupa bilangan bulat.',
            'stock.min' => 'Stok minimal 0.',
        ]);

        $book->update($validated);

        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
