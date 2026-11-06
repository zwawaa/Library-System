@extends('layouts.app')

@section('content')
<h1>Tambah Pengguna</h1>

@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
    </ul>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <p><label>Nama <input type="text" name="name" value="{{ old('name') }}"></label></p>
    <p><label>Email <input type="email" name="email" value="{{ old('email') }}"></label></p>
    <p><label>Password <input type="password" name="password"></label></p>
    <p>
        <label>Role
            <select name="role">
                <option value="petugas">Petugas</option>
                <option value="admin">Admin</option>
            </select>
        </label>
    </p>
    <button type="submit">Simpan</button>
    <a href="{{ route('users.index') }}">Batal</a>
</form>
@endsection