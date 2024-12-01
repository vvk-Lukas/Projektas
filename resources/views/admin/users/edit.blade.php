@extends('app')

@section('title', 'Redaguoti naudotoją')

@section('content')
    <h1>Redaguoti naudotoją: {{ $user->name }}</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Vardas:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div>
            <label for="email">El. paštas:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div>
            <label for="password">Slaptažodis:</label>
            <input type="password" id="password" name="password">
            <small>Palikite tuščią, jei nenorite keisti slaptažodžio</small>
        </div>

        <div>
            <label for="password_confirmation">Slaptažodžio patvirtinimas:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-save">Atnaujinti</button>
    </form>

    <a href="{{ route('admin.users.index') }}">Atgal į sąrašą</a>
@endsection
