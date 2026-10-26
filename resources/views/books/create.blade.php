@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST" novalidate>
        @csrf

        <p>
            <label for="title">Judul</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" maxlength="255" required>
        </p>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
        <p>
            <label for="author">Penulis</label>
            <input type="text" id="author" name="author" value="{{ old('author') }}" maxlength="255" required>
        </p>
        @error('author')
            <p>{{ $message }}</p>
        @enderror
        <p>
            <label for="year">Tahun</label>
            <input type="number" id="year" name="year" value="{{ old('year') }}" min="1900" max="9999" required>
        </p>
        @error('year')
            <p>{{ $message }}</p>
        @enderror
        <p>
            <label for="stock">Stok</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock') }}" min="0" required>
        </p>
        @error('stock')
            <p>{{ $message }}</p>
        @enderror

        <p>
            <label for="category_id">Kategori</label>
            <select name="category_id" id="category_id" required>
                <option value="">Pilih kategori</option>
                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @selected(old('category_id') == $category->id)
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </p>
        @error('category_id')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('books.index') }}" class="button">Kembali</a>
@endsection
