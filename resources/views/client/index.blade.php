@extends('app')

@section('title', 'Konferencijų sąrašas')

@section('content')

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

                <a href="{{ route('client.show', ['id' => $conference['id']]) }}">
                    <button class="btn btn-view">Peržiūra</button>
                </a>
            </td>

        </tr>
    @endforeach
</table>
</div>
@endsection

