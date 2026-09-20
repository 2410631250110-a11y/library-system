@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <p>{{ $description }}</p>

    <div class="stats">
        <div class="stat">
            <p>Jumlah Buku</p>
            <strong>{{ $totalBooks }}</strong>
        </div>

        <div class="stat">
            <p>Jumlah Member</p>
            <strong>{{ $totalMembers }}</strong>
        </div>

        <div class="stat">
            <p>Jumlah Kategori</p>
            <strong>{{ $totalCategories }}</strong>
        </div>
    </div>
@endsection