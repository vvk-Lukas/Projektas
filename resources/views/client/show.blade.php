@extends('app')

@section('title', $conference['name'])

@section('content')

    <div class="title">
    <h1>{{$conference['name']}}</h1>
    <p><strong>Aprasymas: </strong>{{$conference['title']}}</p>
    <p><strong>Data: </strong>{{$conference['date']}}</p>

    <a href="{{route('client.index')}}">
        <button class="btn btn-view">Atgal</button>
    </div>
@endsection
