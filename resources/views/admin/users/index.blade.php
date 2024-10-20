@extends('app')

@section('title', 'Naudotoju valdymas')

@section('content')

    <h1>Naudotojų sąrašas</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>El. paštas</th>
            <th>Veiksmai</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['first_name'] }}</td>
                <td>{{ $user['last_name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user['id']) }}">
                        <button class="btn btn-view">Redaguoti</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('admin.index') }}">Atgal i pagrindini</a>
@endsection
