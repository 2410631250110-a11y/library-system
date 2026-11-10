@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
    <h2>Kelola Pengguna</h2>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach

    <a href="{{ route('users.create') }}" class="button">Tambah Pengguna</a>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user) }}">Edit</a>

                            @if ($user->id !== auth()->id())
                                <form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Hapus</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
