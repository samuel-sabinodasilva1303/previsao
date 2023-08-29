<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Previsão do Tempo</title>
    <link href="{{ asset('welcome.css') }}" rel="stylesheet">
</head>
<body class="weather">
    <p>Previsão do Tempo para <strong>{{ $data['data'][0]['city_name'] }}</strong></p>

    <p>Temperatura: {{ $data['data'][0]['temp'] }}°C</p>
    <p>Condição: {{ $data['data'][0]['weather']['description'] }}</p>

    <button onclick="window.location.href='/'">Nova pesquisa</button>
</body>
</html>
