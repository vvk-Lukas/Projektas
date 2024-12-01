@extends('app')

@section('title', 'Konferencijų sąrašas')

@section('content')
    <h1>Konferencijų sąrašas</h1>
    <a href="{{ route('admin.conferences.create') }}">
        <button class="btn btn-view">Nauja konferencija</button>
    </a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Pavadinimas</th>
            <th>Data</th>
            <th>Veiksmai</th>
        </tr>
        @foreach($conferences as $conference)
            <tr>
                <td>{{ $conference->id }}</td>
                <td>{{ $conference->name }}</td>
                <td>{{ $conference->date }}</td>
                <td>
                    <a href="{{ route('admin.conferences.edit', $conference->id) }}">
                        <button class="btn btn-view">Redaguoti</button>
                    </a>
                    <form action="{{ route('admin.conferences.destroy', $conference->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-view">Ištrinti</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('admin.index') }}">Atgal i pagrindini</a>
@endsection
