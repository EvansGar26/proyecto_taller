@extends('Cruds.master')
@section('contenido_central')
    <style>
        .label {
            display: inline-block;
            background-color: #E5E8E8;
            color: black;
            border-radius: 15px;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            position: relative;
            width: 75%;
        }

        .label-text {
            display: inline-block;
        }

        .label-text h2 {
            margin: 0;
            font-size: 22px;
            line-height: 1;
        }

        .label-text p {
            margin-top: 5px;
            font-size: 12px;
            line-height: 1;
            color: #2471A3;
        }

        .label-arrow {
            display: inline-block;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }

        .label-arrow span {
            display: inline-block;
            font-size: 30px;
            line-height: 1;
            /* transform: rotate(45deg); */
        }
    </style>
    <div class="container mt-2">
        <div class="row">
            <h1>Perfil</h1>
            <div class="col-md-10 offset-md-2 my-2">
                <a href="{{route('datos-user')}}" class="label">
                    <div class="label-text">
                        <h2>Mis datos</h2>
                        <p>Actualizar información personal</p>
                    </div>
                    <div class="label-arrow">
                        <span>&rarr;</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-2 my-2">
                <a href="{{route('conferencias-user')}}" class="label">
                    <div class="label-text">
                        <h2>Mis conferencias</h2>
                        <p>Visualiza las conferencias a las que has confirmado la asistencia</p>
                    </div>
                    <div class="label-arrow">
                        <span>&rarr;</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-2 my-2">
                <a href="{{route('favoritas-user')}}" class="label">
                    <div class="label-text">
                        <h2>Carreras favoritas</h2>
                        <p>Visualiza las carreras que has agregado a favoritas</p>
                    </div>
                    <div class="label-arrow">
                        <span>&rarr;</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection()
