@extends('app')

@section('title', 'Redaguoti naudotoja')

@section('content')
    <h1>Redaguoti naudotoją: {{ $user['first_name'] }} {{ $user['last_name'] }}</h1>

    <a href="{{ route('admin.users.index') }}">Atgal į sąrašą</a>
@endsection
