@extends('template.master')
@section('contenido_central')
    <div class="container mb-5">
        <div class="row mt-5">

        </div>
        <div class="row pt-5">
            @if ($mensaje != null)
                <div class="alert alert-primary" role="alert">
                    {!! $mensaje !!}
                </div>
            @endif

            <h3>Conferencias programadas</h3>
        </div>
        @foreach ($conferencias as $conferencia)
            <div class="row my-3">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('confirma-asistencia') }}" method="POST">
                            @csrf
                            <div class="card-header">
                                Ponente: {!! $conferencia->expositor !!}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tema</h5>
                                <p class="card-text">{!! $conferencia->tema !!}</p>
                                <h5 class="card-title">Descripción</h5>
                                <p class="card-text">{!! $conferencia->descripcion_tema !!}</p>
                                <h5 class="card-title">Fecha y hora</h5>
                                <p class="card-text">{!! $conferencia->fecha !!}, {!! $conferencia->hora_inicio !!}</p>
                                <input type="hidden" name="id_conferencia" value="{!! $conferencia->id !!}">
                                <button type="submit" class="btn btn-primary">Confirmar
                                    asistencia</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection()
