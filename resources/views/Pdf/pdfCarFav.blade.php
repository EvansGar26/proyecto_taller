<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Carreras favorita</title>
</head>

<body>
    <h2>Carreras favoritas</h2>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                {{-- <th class="centrado">ID</th> --}}
                <th class="centrado">Carrera</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Username</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($favoritas as $favorita)
                <tr>
                    {{-- <td class="centrado">{!! $favorita->id !!}</td> --}}
                    <td class="centrado">{!! $favorita->carreras->nombre !!}</td>
                    <td class="centrado">{!! $favorita->users->nombre !!} {!! $favorita->users->ap_pat !!} {!! $favorita->users->ap_mat !!}</td>
                    <td class="centrado">{!! $favorita->users->username !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
