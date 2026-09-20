@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <p>Daftar anggota perpustakaan.</p>

    @if(count($members) > 0)
        <ul class="data-list">
            @foreach($members as $member)
                <li>{{ $member }}</li>
            @endforeach
        </ul>
    @else
        <p>Belum ada data anggota.</p>
    @endif
@endsection