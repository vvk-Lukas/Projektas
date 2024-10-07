<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Puslapis')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        nav {
            padding: 15px 30px;
            background-color: darkslategrey;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav .user-info {
            display: flex;
            align-items: center;
        }

        nav .user-info span {
            margin-right: 15px;
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
            padding: 10px 15px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 5px;
        }

        nav ul li a:visited {
            color: white;
        }

        nav ul li a:hover {
            background-color: #1f3a3a;
            color: #ffffff;
            text-decoration: none;
        }

        nav ul li button {
            background-color: transparent;
            border: 1px solid white;
            border-radius: 5px;
            color: white;
            cursor: not-allowed;
            padding: 8px 15px;
            font-size: 16px;
            margin-left: 10px;
        }


        .container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 30px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
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
        <li><a href="">Darbuotojo posistemis</a></li>
        <li><a href="">Administratoriaus posistemis</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
