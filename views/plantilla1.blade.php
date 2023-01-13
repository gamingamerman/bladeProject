<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla básica</title>
</head>
<body>
    <h2>{{$titulo}}</h2>
    <p>{{time()}}</p>
    <p>{{$edad}} años</p>
    @if ($edad >= 18)
    <p>Contenido para adultos</p>
    @else
    <p>Viva Spunch bop</p>
    <ul>
    @endif
    @for ($i = 0; $i<=$maximo; $i++)
        <li>{{$i}}</li>
    @endfor
    </ul>
    <ol>
        @foreach ($aficiones as $aficion)
            <li>{{$aficion}}</li>
        @endforeach
    </ol>
</body>
</html>