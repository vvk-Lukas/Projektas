@extends('app')

@section('title', 'Redaguoti konferenciją')

@section('content')
    <h1>Redaguoti konferenciją: {{ $conference['name'] }}</h1>

    <a href="{{ route('admin.conferences.index') }}">Atgal į sąrašą</a>
@endsection
