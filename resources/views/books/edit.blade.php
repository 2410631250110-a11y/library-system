@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="title">Judul</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}" maxlength="255" required>
        </p>
        <p>
            <label for="author">Penulis</label>
            <input type="text" id="author" name="author" value="{{ $book->author }}" maxlength="255" required>
        </p>
        <p>
            <label for="year">Tahun</label>
            <input type="number" id="year" name="year" value="{{ $book->year }}" min="1901" max="2155" required>
        </p>
        <p>
            <label for="stock">Stok</label>
            <input type="number" id="stock" name="stock" value="{{ $book->stock }}" min="0" required>
        </p>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('books.index') }}" class="button">Kembali</a>
@endsection
