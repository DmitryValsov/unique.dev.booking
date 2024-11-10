<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!--Styles-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="main">
            @yield('content')









    <div class="add-button">+</div>

    <div class="footer">
        <div class="footer-item active">

            <a href="{{route('index')}}">
            <div class="footer-icon">🏠</div>
            <div>
                Главная
            </div>
            </a>

        </div>
        <div class="footer-item">
            <div class="footer-icon">🚗</div>
            <div>Автомобиль</div>
        </div>

        <a href="{{route('booking.index')}}">
        <div class="footer-item">
            <div class="footer-icon">🏷️</div>
            <div>Запись</div>
        </div>
        </a>

        <div class="footer-item">
            <div class="footer-icon">🔍</div>
            <div>Новости</div>
        </div>
        <div class="footer-item">
            <div class="footer-icon">💬</div>
            <div>Поддержка</div>
        </div>
    </div>



</div>
</body>
</html>
