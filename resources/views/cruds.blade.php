@extends('template.master')
@section('contenido_central')
    <!-- Aqui va el cuerpo -->
    <div class="container mb-3">
        <div class="row mt-5">
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align: center;">
                        <h4 class="card-title">Tabla Países</h4>
                    </div>
                    <a class="btn btn-warning" href="{!! asset('paises') !!}">VER</a>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align: center;">
                        <h4 class="card-title">Tabla Entidades</h4>
                    </div>
                    <a class="btn btn-warning" href="{!! asset('entidades') !!}">VER</a>

                </div>
            </div>
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align: center;">
                        <h4 class="card-title">Tabla Municipios</h4>
                    </div>
                    <a class="btn btn-warning" href="{!! asset('municipios') !!}">VER</a>

                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align: center;">
                        <h4 class="card-title">Tabla Users</h4>
                    </div>
                    <a class="btn btn-warning" href="{!! asset('users') !!}">VER</a>

                </div>
            </div>
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align: center;">
                        <h4 class="card-title">Tabla Univeridades</h4>
                    </div>
                    <a class="btn btn-warning" href="{!! asset('universidades') !!}">VER</a>

                </div>
            </div>
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align: center;">
                        <h4 class="card-title">Tabla Grupos</h4>
                    </div>
                    <a class="btn btn-warning" href="{!! asset('grupos') !!}">VER</a>

                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align: center;">
                        <h4 class="card-title">Tabla Conferencias</h4>
                    </div>
                    <a class="btn btn-warning" href="{!! asset('conferencias') !!}">VER</a>

                </div>
            </div>
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align: center;">
                        <h4 class="card-title">Tabla Carreras</h4>
                    </div>
                    <a class="btn btn-warning" href="{!! asset('carreras') !!}">VER</a>

                </div>
            </div>
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="text-align: center;">
                        <h4 class="card-title">Tabla Otro</h4>
                    </div>
                    <a class="btn btn-warning" href="{!! asset('') !!}">VER</a>

                </div>
            </div>
        </div>
        <div class="row mt-5"></div>
    </div>
@endsection()
