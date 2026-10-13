@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <p>
            <label for="title">Judul</label>
            <input type="text" id="title" name="title" maxlength="255" required>
        </p>
        <p>
            <label for="author">Penulis</label>
            <input type="text" id="author" name="author" maxlength="255" required>
        </p>
        <p>
            <label for="year">Tahun</label>
            <input type="number" id="year" name="year" min="1901" max="2155" required>
        </p>
        <p>
            <label for="stock">Stok</label>
            <input type="number" id="stock" name="stock" min="0" required>
        </p>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('books.index') }}" class="button">Kembali</a>
@endsection
