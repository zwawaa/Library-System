@extends('layouts.app')

@section('content')
<h1>Edit Pengguna</h1>

@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')
    <p><label>Nama <input type="text" name="name" value="{{ old('name', $user->name) }}"></label></p>
    <p><label>Email <input type="email" name="email" value="{{ old('email', $user->email) }}"></label></p>
    <p><label>Password (kosongkan jika tidak diubah) <input type="password" name="password"></label></p>
    <p>
        <label>Role
            <select name="role">
                <option value="petugas" @selected(old('role', $user->role) === 'petugas')>Petugas</option>
                <option value="admin" @selected(old('role', $user->role) === 'admin')>Admin</option>
            </select>
        </label>
    </p>
    <button type="submit">Update</button>
    <a href="{{ route('users.index') }}">Batal</a>
</form>
@endsection