@extends('app')

@section('title', 'Konferencijų sąrašas')

@section('content')
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        .btn {
            padding: 8px 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
            color: white;
        }

        .btn-reg {
            background-color: green;
        }

        .btn-view {
            background-color: darkslategray;
        }

        .btn-view:hover {
            background-color: lightgray;
            color: black;
        }
    </style>
<h1>Konferencijos</h1>
<div class="table">
<table>
    <tr>
        <th>Pavadinimas</th>
        <th>Data</th>
    </tr>
    @foreach($conferences as $conference)
        <tr>
            <td>{{$conference['name']}}</td>
            <td>{{$conference['date']}}</td>
            <td>
                <button class="btn btn-reg" disabled>Užsiregistruoti</button>

                <a href="{{ route('client.conferences.show', ['id' => $conference['id']]) }}">
                    <button class="btn btn-view">Peržiūra</button>
                </a>
            </td>

        </tr>
    @endforeach
</table>
</div>
@endsection

