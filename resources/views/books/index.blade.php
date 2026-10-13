@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>

    <a href="{{ route('books.create') }}" class="button">Tambah Buku</a>

@foreach($books as $book)
    <h3>{{ $book->title }}</h3>

    <p>ID: {{ $book->id }}</p>
    <p>Penulis: {{ $book->author }}</p>
    <p>Tahun: {{ $book->year }}</p>
    <p>Stok: {{ $book->stock }}</p>

    <a href="{{ route('books.show', $book) }}">Detail</a>
    <a href="{{ route('books.edit', $book) }}">Edit</a>

    <form action="{{ route('books.destroy', $book) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Hapus</button>
    </form>
@endforeach
@endsection
