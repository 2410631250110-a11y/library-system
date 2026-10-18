@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST" novalidate>
        @csrf
        @method('PUT')

        <p>
            <label for="title">Judul</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" maxlength="255" required>
        </p>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
        <p>
            <label for="author">Penulis</label>
            <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}" maxlength="255" required>
        </p>
        @error('author')
            <p>{{ $message }}</p>
        @enderror
        <p>
            <label for="year">Tahun</label>
            <input type="number" id="year" name="year" value="{{ old('year', $book->year) }}" min="1900" max="9999" required>
        </p>
        @error('year')
            <p>{{ $message }}</p>
        @enderror
        <p>
            <label for="stock">Stok</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock', $book->stock) }}" min="0" required>
        </p>
        @error('stock')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('books.index') }}" class="button">Kembali</a>
@endsection
