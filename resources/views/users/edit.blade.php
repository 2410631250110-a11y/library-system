@extends('layouts.app')

@section('title', 'Edit Pengguna')

@section('content')
    <h2>Edit Pengguna</h2>

    <form action="{{ route('users.update', $user) }}" method="POST" novalidate>
        @csrf
        @method('PUT')

        <p>
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" maxlength="255" required>
        </p>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <p>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" maxlength="255" required>
        </p>
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <p>
            <label for="password">Password Baru (kosongkan jika tidak diubah)</label>
            <input type="password" id="password" name="password" minlength="8" maxlength="72" autocomplete="new-password">
        </p>
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <p>
            <label for="role">Role</label>
            <select id="role" name="role" required>
                <option value="petugas" @selected(old('role', $user->role) === 'petugas')>Petugas</option>
                <option value="admin" @selected(old('role', $user->role) === 'admin')>Admin</option>
            </select>
        </p>
        @error('role')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('users.index') }}" class="button">Kembali</a>
@endsection
