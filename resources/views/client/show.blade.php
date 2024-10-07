@extends('app')

@section('title', $conference['name'])

@section('content')
    <h1>{{$conference['name']}}</h1>
    <p><strong>Aprasymas: </strong>{{$conference['title']}}</p>
    <p><strong>Data: </strong>{{$conference['date']}}</p>

    <a href="{{route('client.conferences.index')}}">
        <button>Atgal</button>
@endsection
