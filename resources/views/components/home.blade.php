<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Treni in Partenza</title>
</head>

<body>
    <h1>Treni in Partenza Oggi</h1>
        <ul>
            @foreach ($todayTrains as $train)
                <li>{{ $train->azienda }} - Da {{ $train->stazione_di_partenza }} a {{ $train->stazione_di_arrivo }} - Partenza: {{ $train->orario_di_partenza->format('H:i') }}</li>
            @endforeach
        </ul>
</body>

</html>