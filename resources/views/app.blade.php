<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Puslapis')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<nav>
    <div class="user-info">
        <span>Lukas Zukauskas</span>
        <button disabled>Logout</button>
    </div>
    <ul>
        <li><a class="route" href="{{route('client.conferences.index')}}">Kliento posistemis</a></li>
        <li><a href="{{route('employee.conferences.index')}}">Darbuotojo posistemis</a></li>
        <li><a href="{{route('admin.index')}}">Administratoriaus posistemis</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
