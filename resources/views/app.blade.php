<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Puslapis')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
<nav>
    <div class="user-info">
        @auth
            <span>{{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <span>Guest</span>
            <a href="{{ route('login') }}">Login</a> |
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
    <ul>
        <li><a class="route" href="{{route('client.index')}}">Kliento posistemis</a></li>
        <li><a href="{{route('employee.index')}}">Darbuotojo posistemis</a></li>
        <li><a href="{{route('admin.index')}}">Administratoriaus posistemis</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
