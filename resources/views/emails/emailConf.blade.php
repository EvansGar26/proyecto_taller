<!DOCTYPE html>
<html>
<head>
    <title>Información de la Conferencia</title>
</head>
<body>
    {{-- <form action="{{ route('confirma-asistencia') }}" method="POST">
        @csrf --}}
        <h2>Información de la Conferencia</h2>
        <p><strong>Ponente:</strong>{!! $datos->expositor!!}</p>
        <p><strong>Tema:</strong>{!! $datos->tema!!}</p>
        <p><strong>Descripción:</strong>{!! $datos->descripcion_tema!!}</p>
        <p><strong>Fecha y Hora:</strong>{!! $datos->fecha !!}, {!! $datos->hora_inicio !!}</p>
        <a href="{!! $rutaVerConferencias !!}" style="background-color: #4CAF50; color: white; padding: 12px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 4px;">
            Ver más</a>
    {{-- </form> --}}
</body>
</html>
