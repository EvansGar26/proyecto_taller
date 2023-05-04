<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
</head>

<body>
    <h2>Carreras en las universidades</h2>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Universidad</th>
                <th class="centrado">Carrera</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carreras as $carrera)
                <tr>
                    <td class="centrado">{!! $carrera->id !!}</td>
                    <td class="centrado">{!! $carrera->universidades->nombre !!}</td>
                    <td class="centrado">{!! $carrera->carreras->nombre !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
