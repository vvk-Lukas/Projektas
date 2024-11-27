@extends('app')

@section('title', 'Konferencijų sąrašas')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">Vardas:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">El. paštas:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Slaptažodis:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="password_confirmation">Patvirtinkite slaptažodį:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br>

        <label for="role">Rolė:</label>
        <select id="role" name="role" required>
            <option value="client">Klientas</option>
            <option value="employee">Darbuotojas</option>
            <option value="admin">Administratorius</option>
        </select><br>

        <button type="submit">Registruotis</button>
    </form>
@endsection
