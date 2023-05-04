<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        form {
            /* background-color: #fff; */
            border-radius: 10px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
            /* padding: 20px; */
            /* max-width: 83%; */
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
            resize: none;
        }

        /* input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        } */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{!! asset('index') !!}">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">

                    @if (Auth::user()->id_rol === 1)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="tablasDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Tablas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="tablasDropdown">
                                <li><a class="dropdown-item" href="{!! asset('paises') !!}">Países</a></li>
                                <li><a class="dropdown-item" href="{!! asset('entidades') !!}">Entidades</a></li>
                                <li><a class="dropdown-item" href="{!! asset('municipios') !!}">Municipios</a></li>
                                <li><a class="dropdown-item" href="{!! asset('universidades') !!}">Universidades</a></li>
                                <li><a class="dropdown-item" href="{!! asset('carreras') !!}">Carreras</a></li>
                                <li><a class="dropdown-item" href="{!! asset('grupos') !!}">Grupos</a></li>
                                <li><a class="dropdown-item" href="{!! asset('conferencias') !!}">Conferencias</a></li>
                                <li><a class="dropdown-item" href="{!! asset('users') !!}">Usuarios</a></li>
                                <li><a class="dropdown-item" href="{!! asset('carreras_universidades') !!}">Asignar carreras</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="imagenesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Imágenes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="imagenesDropdown">
                                <li><a class="dropdown-item" href="{!! asset('carreras_imagenes') !!}">Imagenes de carreras</a>
                                </li>
                                <li><a class="dropdown-item" href="{!! asset('universidades_imagenes') !!}">Imagenes de
                                        universidades</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="imagenesDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Graficas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="imagenesDropdown">
                                <li><a class="dropdown-item" href="{{route('graf-carreras')}}">Grafica de carreras favoritas</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('graf-conferencias')}}">Grafica de asistencia a conferencias</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{!! asset('conferencias1') !!}" id="imagenesDropdown" role="button"
                            aria-expanded="false">
                            Conferencias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('despliega') }}" id="imagenesDropdown" role="button"
                            aria-expanded="false">
                            Tecnologías e ingenierías
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('despliega1') }}" id="imagenesDropdown" role="button"
                            aria-expanded="false">
                            Ciencias
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mx-4" href="#" id="usernameDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->username }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="usernameDropdown">
                            <li><a class="dropdown-item" href="{{ route('perfil') }}">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Configuración</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href=""
                                    onclick="event.preventDefault(); logout();">Cerrar
                                    sesión</a></li>
                            <script>
                                function logout() {
                                    fetch('{{ route('cierra-sesion') }}', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                            },
                                            credentials: 'same-origin'
                                        })
                                        .then(response => {
                                            if (response.redirected) {
                                                window.location.href = response.url;
                                            }
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                }
                            </script>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-2">
        <div class="row">
            <div class="table-responsive">
