@extends('app')

@section('title', $conference->name)

@section('content')
    <div class="title">
        <h1>{{ $conference->name }}</h1>
        <p><strong>Aprašymas: </strong>{{ $conference->description }}</p>
        <p><strong>Data: </strong>{{ $conference->date }}</p>
        <a href="{{ route('client.index') }}">
            <button class="btn btn-view">Atgal</button>
        </a>
    </div>
@endsection
