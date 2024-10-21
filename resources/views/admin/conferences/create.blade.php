@extends('app')

@section('title', 'Nauja konferencija')

@section('content')
    <h1>Naujos konferencijos kūrimas</h1>

<div class="form-container">
    <label for="name">Pavadinimas:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="description">Aprašymas:</label>
    <textarea id="description" name="description" required></textarea><br><br>

    <label for="date">Data:</label>
    <input type="date" id="date" name="date" required><br><br>

    <a href="{{ route('admin.conferences.index') }}">
    <button id="submitButton" class="btn btn-view">Sukurti konferenciją</button>
    </a>
</div>

    <a href="{{ route('admin.conferences.index') }}">Atgal į sąrašą</a>
@endsection
