@extends('app')

@section('title', 'Konferencijos Peržiūra')

@section('content')
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
        <button class="btn btn-view">Atgal į konferencijų sąrašą</button>
    </a>
@endsection
