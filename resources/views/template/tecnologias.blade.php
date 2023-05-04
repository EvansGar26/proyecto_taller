@extends('template.master')
@section('contenido_central')
    <style>
        .my-carousel {
            max-width: 100vh;
            /* height: 45vh; */
            /* altura deseada */
            margin: auto;
            display: block;
        }
    </style>


    <!-- Aqui va el cuerpo -->
    <div class="container mb-3" id="contenido1">
        <div class="row mt-5">

        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h1>Carreras</h1>
                <form action="{{ route('selecciona') }}" method="POST" id="otro">
                    @csrf
                    <label for="carrera">Seleccione una opción:</label>
                    <div class="row">
                        <div class="col-md-8">
                            <select name="carrera" id="carrera" class="form-select my-2">
                                @foreach ($carreras as $carrera)
                                    <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" name="submit" class="btn btn-outline-primary my-2">Consultar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                @if ($carreraSeleccionada)
                        <form id="mi-formulario-delete" method="POST" action="{{ route('favorito-quitar') }}">
                            @csrf
                            {{-- @method('DELETE') --}}
                            <input type="hidden" name="id_user" value="{{ $id_user }}">
                            <input type="hidden" name="id_carrera" value="{{ $carreraSeleccionada->id }}">
                            <button class="btn btn-danger my-3"id="mi-boton-quitar"
                                type="submit" @if (!$favorita) style="display: none;" @endif>Quitar carrera
                                de
                                favoritos</button>
                        </form>

                        <form id="mi-formulario" method="POST" action="{{ route('favorito') }}">
                            @csrf
                            <input type="hidden" name="id_user" value="{{ $id_user }}">
                            <input type="hidden" name="id_carrera" value="{{ $carreraSeleccionada->id }}">
                            <button class="btn btn-success my-3"id="mi-boton-agregar" type="submit" @if ($favorita) style="display: none;" @endif>Agregar carrera a
                                favoritos</button>
                        </form>

                    <h3 class="card-title mb-3">Nombre de la carrera: <span
                            style="color: red; font-style: italic;">{!! $carreraSeleccionada->nombre !!}</span></h3>
                    <!-- Descripción de la carrera -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="card-subtitle mb-3 text-muted">Objetivo de la carrera</h4>
                            <p class="card-text">{!! $carreraSeleccionada->objetivo !!}
                            </p>
                        </div>
                    </div>
                    <!-- Perfil de ingreso -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Perfil de ingreso</h4>
                            <ul class="list-unstyled">
                                {!! $carreraSeleccionada->perfil_ingreso !!}
                            </ul>
                        </div>
                    </div>
                    <!-- Perfil de egreso -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Perfil de egreso</h4>
                            <ul class="list-unstyled">
                                {!! $carreraSeleccionada->perfil_egreso !!}
                            </ul>
                        </div>
                    </div>
                    <!-- Campo laboral -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Campo laboral</h4>
                            <p class="card-text">{!! $carreraSeleccionada->campo_laboral !!}</p>
                        </div>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide my-carousel mb-4">
                        <div class="carousel-indicators">
                            @foreach ($imagenes as $index => $imagen)
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}"
                                    @if ($index === 0) class="active"aria-current="true" @endif></li>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($imagenes as $index => $imagen)
                                <div
                                    @if ($index === 0) class="carousel-item active" @else class="carousel-item" @endif>
                                    <img src="{!! asset($imagen->ruta) !!}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Instituciones que ofrecen la carrera -->
                    <h4 class="card-title my-3">Instituciones que ofrecen la carrera</h4>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($universidades as $universidad)
                            <div class="col">
                                <div class="card mx-4" style="width: 18rem;">
                                    <div id="carouselExampleIndicators0{{ $universidad->id_universidad }}"
                                        class="carousel slide my-carousel mb-4">
                                        <div class="carousel-indicators">
                                            @php
                                                $index = 0;
                                            @endphp
                                            @foreach ($img_universidades as $imagen)
                                                @if ($universidad->id_universidad === $imagen->id_universidad)
                                                    <li data-bs-target="#carouselExampleIndicators0{{ $universidad->id_universidad }}"
                                                        data-bs-slide-to="{{ $index }}"
                                                        @if ($index === 0) class="active" aria-current="true" @endif>
                                                    </li>
                                                    @php
                                                        $index++;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </div>

                                        <div class="carousel-inner">
                                            @php $index = 0; @endphp
                                            @foreach ($img_universidades as $imagen)
                                                @if ($universidad->id_universidad === $imagen->id_universidad)
                                                    <div
                                                        class="carousel-item @if ($index === 0) active @endif">
                                                        <img src="{!! asset($imagen->ruta) !!}" class="d-block w-100"
                                                            alt="...">
                                                    </div>
                                                    @php $index++; @endphp
                                                @endif
                                            @endforeach
                                        </div>

                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators0{{ $universidad->id_universidad }}"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators0{{ $universidad->id_universidad }}"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $universidad->universidades->nombre }}</h5>
                                        <p class="card-text">{{ $universidad->universidades->direccion }}</p>
                                        {{-- <a href="#" class="btn btn-primary">Ver más</a> --}}
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $universidad->universidades->id }}">
                                            Ver más
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $universidad->universidades->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                            Descripción
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <style>
                                                            .school-info {
                                                                background-color: #f8f8f8;
                                                                border: 1px solid #ccc;
                                                                padding: 20px;
                                                            }

                                                            .school-info h2 {
                                                                font-size: 24px;
                                                                margin-bottom: 10px;
                                                            }

                                                            .school-info p {
                                                                font-size: 16px;
                                                                line-height: 1.5;
                                                                margin-bottom: 20px;
                                                            }

                                                            .school-info ul {
                                                                list-style: none;
                                                                margin: 0;
                                                                padding: 0;
                                                            }

                                                            .school-info li {
                                                                font-size: 14px;
                                                                line-height: 1.5;
                                                                margin-bottom: 10px;
                                                            }
                                                        </style>
                                                        <div class="school-info">
                                                            <h2>{{ $universidad->universidades->nombre }}</h2>
                                                            {{-- <p>La escuela primaria XYZ es una institución educativa
                                                                comprometida con la formación integral de sus estudiantes.
                                                            </p> --}}
                                                            <ul>
                                                                <li>Dirección: {{ $universidad->universidades->direccion }}
                                                                </li>
                                                                <li>Teléfono: {{ $universidad->universidades->telefono }}
                                                                </li>
                                                                <li>Director: {{ $universidad->universidades->direccion }}
                                                                </li>
                                                                <li>Página web: <a
                                                                        href="{{ $universidad->universidades->url }}"
                                                                        style="color: black; ">{{ $universidad->universidades->url }}</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
                        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

                    <script>
                        $(document).ready(function() {
                            // Configura la petición AJAX con el token CSRF
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-Token': $('meta[name=_token]').attr('content')
                                }
                            });
                            var urlServidor = "/tecnologias"; // especifica la URL del servidor en una variable
                            $("#mi-boton-agregar").click(function() {
                                $.ajax({
                                    url: urlServidor, // utiliza la variable para especificar la URL
                                    success: function() {
                                        $("#mi-boton-agregar").hide();
                                        $("#mi-boton-quitar").show().prop("disabled", false);
                                    }
                                });
                            });


                            $("#mi-boton-quitar").click(function() {
                                $.ajax({
                                    url: urlServidor, // utiliza la variable para especificar la URL
                                    success: function() {
                                        $("#mi-boton-quitar").hide();
                                        $("#mi-boton-agregar").show().prop("disabled", false);
                                    }
                                });
                            });

                            $('#mi-formulario').on('submit', function(event) {
                                // Previene la recarga de la página al enviar el formulario
                                event.preventDefault();
                                // Obtiene la URL de la acción del formulario
                                var url = $('#mi-formulario').attr('action');
                                // Obtiene los datos del formulario
                                var formData = $('#mi-formulario').serialize();
                                // Envía la solicitud AJAX al servidor
                                $.ajax({
                                    url: url,
                                    type: 'POST',
                                    data: formData,
                                    dataType: 'json',
                                    success: function(response) {
                                        // Maneja la respuesta del servidor
                                        alert('Se agregó correctamente a favoritos');
                                    },
                                    error: function(error) {
                                        // alert();
                                        // Maneja los errores de la solicitud
                                        console.log(error);
                                    }
                                });
                            });

                            $('#mi-formulario-delete').on('submit', function(event) {
                                // Previene la recarga de la página al enviar el formulario
                                event.preventDefault();
                                // Obtiene la URL de la acción del formulario
                                var url = $('#mi-formulario-delete').attr('action');
                                // Obtiene los datos del formulario
                                var formData = $('#mi-formulario-delete').serialize();
                                // Envía la solicitud AJAX al servidor
                                $.ajax({
                                    url: url,
                                    type: 'POST',
                                    data: formData,
                                    dataType: 'json',
                                    success: function(response) {
                                        // Maneja la respuesta del servidor
                                        alert('Se eliminó de tus favoritos');
                                    },
                                    error: function(error) {
                                        // alert();
                                        // Maneja los errores de la solicitud
                                        console.log(error);
                                    }
                                });
                            });

                        });
                    </script>
                @endif
            </div>
        </div>
    </div>
@endsection()
