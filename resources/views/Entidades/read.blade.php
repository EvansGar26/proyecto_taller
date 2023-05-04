@extends('Cruds.master_read')
@section('contenido_central')
    <div class="card-header">Detalles de la entidad</div>

    <div class="detail">
        <label>País: </label>
        <div class="detail-value">{!! $entidad->paises->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Nombre: </label>
        <div class="detail-value">{!! $entidad->nombre !!}</div>
    </div>

    <div class="detail">
        <label>Status: </label>
        <div class="detail-value">{!! $entidad->status !!}</div>
    </div>
@endsection()
