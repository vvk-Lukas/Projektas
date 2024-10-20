@extends('app')

@section('title', 'Darbuotojo posistemis - Konferencijų sąrašas')

@section('content')
    <style>
        table {
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

        .btn-view {
            background-color: darkslategray;
        }

        .btn-view:hover {
            background-color: lightgray;
            color: black;
        }
    </style>
    <h1>Konferencijų sąrašas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Pavadinimas</th>
            <th>Data</th>
            <th>Veiksmai</th>
        </tr>
        @foreach($conferences as $conference)
            <tr>
                <td>{{ $conference['id'] }}</td>
                <td>{{ $conference['name'] }}</td>
                <td>{{ $conference['date'] }}</td>
                <td>
                    <a href="{{ route('employee.conferences.show', ['id' => $conference['id']]) }}">
                        <button  class="btn btn-view">Peržiūra</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
