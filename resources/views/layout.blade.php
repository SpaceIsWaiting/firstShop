<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-light" >
<nav class="py-2 bg-light ">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="/" class="nav-link link-dark px-2 active" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Особенности</a></li>
            <li class="nav-item"><a href="/products" class="nav-link link-dark px-2">Товары</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Помощь</a></li>
            <li class="nav-item"><a href="/review" class="nav-link link-dark px-2">Оставь отзыв</a></li>
            <li class="nav-item"><a href="/about" class="nav-link link-dark px-2">О нонас</a></li>
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="/sign-in" class="nav-link link-dark px-2">Login</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
        </ul>
    </div>
    @yield('header')
</nav>
<div class="container">
    @yield('main_content')
</div>

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
        <p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
        <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.1/getting-started/introduction/">getting started guide</a>.</p>
    </div>
</footer>
</body>

</html>
