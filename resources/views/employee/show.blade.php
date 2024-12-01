@extends('app')

@section('title', 'Konferencijos Peržiūra')

@section('content')
    <h1>{{ $conference->name }}</h1>
    <p><strong>Data:</strong> {{ $conference->date }}</p>
    <p><strong>Aprašymas:</strong> {{ $conference->description }}</p>

    <h2>Užsiregistravę klientai:</h2>
    <ul>
        @foreach($conference->users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>

    <a href="{{ route('employee.index') }}">
        <button class="btn btn-view">Atgal į konferencijų sąrašą</button>
    </a>
@endsection
