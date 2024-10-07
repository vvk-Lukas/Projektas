@extends('app')

@section('title', $conference['name'])

@section('content')
    <style>
        .title {
            padding: 30px;
        }
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

        /* Pagrindinės dalies stilizavimas */
        h1 {
            color: darkslategray;
            font-size: 28px;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        p strong {
            font-weight: bold;
        }
    </style>
    <div class="title">
    <h1>{{$conference['name']}}</h1>
    <p><strong>Aprasymas: </strong>{{$conference['title']}}</p>
    <p><strong>Data: </strong>{{$conference['date']}}</p>

    <a href="{{route('client.conferences.index')}}">
        <button class="btn">Atgal</button>
    </div>
@endsection
