@extends('app')

@section('title', 'Konferencijų sąrašas')

@section('content')
    <h1>Konferencijos</h1>
    <div class="table">
        <table>
            <tr>
                <th>Pavadinimas</th>
                <th>Data</th>
                <th>Veiksmai</th>
            </tr>
            @foreach($conferences as $conference)
                <tr>
                    <td>{{ $conference->name }}</td>
                    <td>{{ $conference->date }}</td>
                    <td>
                    <td>
                        @if(!$conference->users->contains(Auth::id()))
                            <form action="{{ route('client.register', $conference->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-reg">Užsiregistruoti</button>
                            </form>
                        @else
                            <button class="btn btn-reg" disabled>Užsiregistruota</button>
                        @endif

                        <a href="{{ route('client.show', ['id' => $conference['id']]) }}">
                            <button class="btn btn-view">Peržiūra</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
