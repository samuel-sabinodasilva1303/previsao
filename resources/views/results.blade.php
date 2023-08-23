<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Previsão do Tempo</title>
</head>
<body>
    <h1>Previsão do Tempo para {{ $data['data'][0]['city_name'] }}, {{ $data['data'][0]['state_code'] }}</h1>

    <p>Temperatura: {{ $data['data'][0]['temp'] }}°C</p>
    <p>Condição: {{ $data['data'][0]['weather']['description'] }}</p>
</body>
</html>
