@extends('Cruds.master_read')
@section('contenido_central')
    <div class="card-header">Detalles de la carrera</div>

    <div class="detail">
        <label>ID: </label>
        <div class="detail-value">{!! $carrera->id !!}</div>
    </div>

    <div class="detail">
        <label>Nombre: </label>
        <div class="detail-value">{!! $carrera->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Objetivo: </label>
        <div class="detail-value">{!! $carrera->objetivo !!}</div>
    </div>

    <div class="detail">
        <label>Descripción: </label>
        <div class="detail-value">{!! $carrera->descripcion !!}</div>
    </div>

    <div class="detail">
        <label>Perfil de ingreso: </label>
        <div class="detail-value">{!! $carrera->perfil_ingreso !!}</div>
    </div>

    <div class="detail">
        <label>Perfil de egreso: </label>
        <div class="detail-value">{!! $carrera->perfil_egreso !!}</div>
    </div>

    <div class="detail">
        <label>Campo laboral: </label>
        <div class="detail-value">{!! $carrera->campo_laboral !!}</div>
    </div>

    <div class="detail">
        <label>Status: </label>
        <div class="detail-value">{!! $carrera->status !!}</div>
    </div>
@endsection()
