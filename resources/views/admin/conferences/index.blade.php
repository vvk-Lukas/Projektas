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
                <td>{{ $conference['id'] }}</td>
                <td>{{ $conference['name'] }}</td>
                <td>{{ $conference['date'] }}</td>
                <td>
                    <a href="{{ route('admin.conferences.edit', $conference['id']) }}">
                        <button class="btn btn-view">Redaguoti</button>
                    </a>
                    @if($conference['status'] !== 'ivykusi')
                        <form style="display:inline;">
                            @method('DELETE')
                            <button type="submit" class="btn-view btn">Ištrinti</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('admin.index') }}">Atgal i pagrindini</a>
@endsection
