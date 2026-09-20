@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <p><strong>ID:</strong> {{ $id }}</p>

    <a href="{{ url('/books') }}" class="button">
        Kembali ke Daftar Buku
    </a>
@endsection