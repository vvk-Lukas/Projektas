@extends('app')

@section('title', 'Redaguoti konferenciją')

@section('content')
    <h1>Redaguoti konferenciją: {{ $conference['name'] }}</h1>

    <form action="{{ route('admin.conferences.update', $conference->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Pavadinimas:</label>
        <input type="text" id="name" name="name" value="{{ $conference->name }}" required><br><br>

        <label for="description">Aprašymas:</label>
        <textarea id="description" name="description" required>{{ $conference->description }}</textarea><br><br>

        <label for="date">Data:</label>
        <input type="date" id="date" name="date" value="{{ $conference->date }}" required><br><br>

        <button type="submit" class="btn-view btn">Atnaujinti konferenciją</button>
    </form>

    <a href="{{ route('admin.conferences.index') }}">Atgal į sąrašą</a>
@endsection
