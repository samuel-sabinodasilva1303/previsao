<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Previsão do tempo</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('welcome.css') }}" rel="stylesheet">
    </head>

    <body id="weather">
        <p>Consulte a temperatura da sua cidade, em tempo real </p>
        <form class="weather_form" method="GET" action="{{ route('weather.search') }}">
            <input type="text" name="city" placeholder="Digite o nome da cidade">
            <button type="submit">Pesquisar</button>
        </form>

    </body>
</html>
