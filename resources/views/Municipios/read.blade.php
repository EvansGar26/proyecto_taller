@extends('Cruds.master_read')
@section('contenido_central')
    <div class="card-header">Detalles del municipio</div>

    <div class="detail">
        <label>País: </label>
        <div class="detail-value">{!! $municipio->entidades->paises->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Entidad: </label>
        <div class="detail-value">{!! $municipio->entidades->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Nombre: </label>
        <div class="detail-value">{!! $municipio->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Status: </label>
        <div class="detail-value">{!! $municipio->status !!}</div>
    </div>
@endsection()
