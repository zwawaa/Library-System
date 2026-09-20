@extends('layouts.app')

@section('title', 'Data Member')

@section('content')
    <h2>{{ $title }}</h2>
    <ol>
        @foreach($members as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ol>
@endsection