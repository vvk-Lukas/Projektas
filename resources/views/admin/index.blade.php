@extends('app')

@section('title', 'Administracijos puslapis')

@section('content')
    <h1>Administratoriaus posistemis</h1>
    <p><strong>Vardas:</strong> Lukas</p>
    <p><strong>Pavardė:</strong> Zukauskas</p>
    <p><strong>Grupė:</strong> PIT-22-NL</p>

    <ul>
        <li><a href="{{ route('admin.users.index') }}">Sistemos naudotojų valdymas</a></li>
        <li><a href="{{ route('admin.conferences.index') }}">Konferencijos valdymas</a></li>
    </ul>

@endsection
