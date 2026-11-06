@extends('layouts.app')

@section('content')
<h1>Kelola Pengguna</h1>

@if (session('success')) <p style="color:green">{{ session('success') }}</p> @endif
@if (session('error'))   <p style="color:red">{{ session('error') }}</p> @endif

<a href="{{ route('users.create') }}">+ Tambah Pengguna</a>

<table border="1" cellpadding="6">
    <thead>
        <tr><th>Nama</th><th>Email</th><th>Role</th><th>Aksi</th></tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <a href="{{ route('users.edit', $user) }}">Edit</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline"
                      onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection