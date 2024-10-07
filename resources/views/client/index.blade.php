@extends('app')

@section('title', 'Konferencijų sąrašas')

@section('content')
<h1>Konferencijos</h1>
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
                <!-- Registracijos mygtukas (neaktyvus) -->
                <button disabled>Užsiregistruoti</button>

                <!-- Peržiūros mygtukas nukreipia į show.blade.php -->
                <a href="{{ route('client.conferences.show', ['id' => $conference['id']]) }}">
                    <button>Peržiūra</button>
                </a>
            </td>

        </tr>

    @endforeach
</table>
@endsection

