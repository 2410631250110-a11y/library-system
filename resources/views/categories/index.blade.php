@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <p>Daftar kategori buku di perpustakaan.</p>

    @if(count($categories) > 0)
        <ul class="data-list">
            @foreach($categories as $category)
                <li>{{ $category }}</li>
            @endforeach
        </ul>
    @else
        <p>Belum ada data kategori.</p>
    @endif
@endsection