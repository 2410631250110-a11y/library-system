<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|digits:4',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
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
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori yang dipilih tidak tersedia.',
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
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|digits:4',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
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
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori yang dipilih tidak tersedia.',
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
