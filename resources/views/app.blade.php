<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Puslapis')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        nav {
            padding: 10px;
            background-color: dimgray;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        nav ul li {
            margin-left: 20px;
            color: white;
        }
        nav ul li a {
            text-decoration: none;
            color: white;
        }
        nav ul li a:hover {
            text-decoration: none;
            color: #1a202c;
        }
        nav ul li button {
            background-color: transparent;
            border: none;
            color: white;
            cursor: not-allowed;
            font-size: 16px;
        }
        nav ul li button:hover {
            text-decoration: none;
            color: #3b4351;
        }
        .container {
            padding: 20px;
        }
        .route li {
            color: white;
        }
    </style>
</head>
<body>
<nav>
    <div class="user-info">
        <span>Lukas Zukauskas</span>
        <button disabled>Logout</button>
    </div>
    <ul>
        <li><a class="route" href="{{route('client.conferences.index')}}">Kliento posistemis</a></li>
        <li><a href="/employee/conferences">Darbuotojo posistemis</a></li>
        <li><a href="/admin">Administratoriaus posistemis</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
