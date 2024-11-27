@extends('app')

@section('title', 'Konferencijų sąrašas')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">El. paštas:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Slaptažodis:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Prisijungti</button>
    </form>

@endsection
