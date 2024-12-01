@extends('app')

@section('title', 'Nauja konferencija')

@section('content')
    <h1>Naujos konferencijos kūrimas</h1>

    <form action="{{ route('admin.conferences.store') }}" method="POST">
        @csrf
        <label for="name">Pavadinimas:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Aprašymas:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="date">Data:</label>
        <input type="date" id="date" name="date" required><br><br>

        <button type="submit" class="btn-view btn">Sukurti konferenciją</button>
    </form>

    <a href="{{ route('admin.conferences.index') }}">Atgal į sąrašą</a>
@endsection
