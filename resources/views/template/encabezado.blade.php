<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>VocaPepWeb</title>


    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> --}}
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    {{-- <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name=_token]').attr('content')
                }
            });
        });
    </script> --}}

    <!-- Bootstrap core CSS -->
    {{-- <link href="{!! asset('estilo/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> --}}
    {{-- Agregar a public --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{!! asset('estilo/assets/css/fontawesome.css') !!}">
    <link rel="stylesheet" href="{!! asset('estilo/assets/css/templatemo-grad-school.css') !!}">
    <link rel="stylesheet" href="{!! asset('estilo/assets/css/owl.css') !!}">
    <link rel="stylesheet" href="{!! asset('estilo/assets/css/lightbox.css') !!}">
</head>

<body>
    <!--header-->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="{!! asset('index') !!}"><em>Voca</em>PepWeb</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="{!! asset('index') !!}">Inicio</a></li>
                <li><a href="{{ route('despliega1') }}">Ciencia</a></li>
                {{-- <li><a href="{!! asset('tecnologias') !!}">Tecnologías e Ingenierías</a></li> --}}
                <li><a href="{{ route('despliega') }}">Tecnologías e Ingenierías</a></li>
                <li><a href="{!! asset('conferencias1') !!}">Conferencias</a></li>
                @if (Auth::check())
                    <li class="has-submenu"><a href="#">{{ Auth::user()->username }}</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('perfil') }}">Perfil</a></li>
                            {{-- <li><a href="{!! asset('cruds') !!}">CRUDS</a></li> --}}
                            <li>
                                <a href="" onclick="event.preventDefault(); logout();">
                                    Cerrar sesión
                                </a>
                            </li>
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
                @else
                    <li class="has-submenu"><a href="#">Entrar</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('login') }}">Inciar sesión</a></li>
                            <li><a href="{!! asset('registro') !!}">Registrarse</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
    </header>
