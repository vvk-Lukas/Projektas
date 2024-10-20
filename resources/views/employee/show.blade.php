@extends('app')

@section('title', 'Konferencijos Peržiūra')

@section('content')
    <style>
        .btn {
            padding: 5px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
            background-color: darkslategray;
            color: white;
            transition: background-color 0.3s ease, color 0.3s ease;
            margin: 30px;
        }

        .btn:hover {
            background-color: lightgray;
            color: black;
        }
    </style>
    <h1>{{ $conference['name'] }}</h1>
    <p><strong>Data:</strong> {{ $conference['date'] }}</p>
    <p><strong>Aprašymas:</strong> {{ $conference['title'] }}</p>

    <h2>Užsiregistravę klientai:</h2>
    <ul>
        @foreach($conference['attendees'] as $attendee)
            <li>{{ $attendee }}</li>
        @endforeach
    </ul>

    <a href="{{ route('employee.conferences.index') }}">
        <button class="btn">Atgal į konferencijų sąrašą</button>
    </a>
@endsection
