@extends('app')

@section('title', 'Darbuotojo posistemis - Konferencijų sąrašas')

@section('content')
    <h1>Konferencijų sąrašas</h1>
    <table class="table">
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
                    <a href="{{ route('employee.show', ['id' => $conference['id']]) }}">
                        <button  class="btn btn-view">Peržiūra</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
