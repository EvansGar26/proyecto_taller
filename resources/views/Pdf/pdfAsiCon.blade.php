<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de asistencia</title>
</head>

<body>
    <h2>Asistencia a las conferencias</h2>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                {{-- <th class="centrado">ID</th> --}}
                <th class="centrado">ID Conferencia</th>
                <th class="centrado">Tema</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Username</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asistencias as $asistencia)
                <tr>
                    {{-- <td class="centrado">{!! $conferencia->id !!}</td> --}}
                    <td class="centrado">{!! $asistencia->conferencias->id !!}</td>
                    <td class="centrado">{!! $asistencia->conferencias->tema !!}</td>
                    <td class="centrado">{!! $asistencia->users->nombre !!} {!! $asistencia->users->ap_pat !!} {!! $asistencia->users->ap_mat !!}</td>
                    <td class="centrado">{!! $asistencia->users->username !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
