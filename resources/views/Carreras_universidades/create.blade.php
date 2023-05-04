@extends('Cruds.master')
@section('contenido_central')
    <h1>Asignar las carreras</h1>
    {!! Form::open(['url' => '/carreras_universidades']) !!}
    <div class="form-group my-2">
        {!! Form::label('id_universidad', 'Seleccione una universidad:') !!}
        {!! Form::select('id_universidad', $universidades->pluck('nombre', 'id')->all(), null, [
            'class' => 'form-control',
            'placeholder' => 'Seleccione una universidad',
        ]) !!}
    </div>

    <input type="checkbox" id="select-all" value="all"> Seleccionar todas
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Nombre</th>
                <th class="centrado">Objetivo</th>
                <th class="centrado">Status</th>
                <th class="centrado">Seleccionar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carreras as $carrera)
                <tr>
                    <td class="centrado">{!! $carrera->id !!}</td>
                    <td class="centrado">{!! $carrera->nombre !!}</td>
                    <td class="centrado">{!! $carrera->objetivo !!}</td>
                    <td class="centrado">{!! $carrera->status !!}</td>
                    <td class="centrado">
                        <div class="form-check">
                            <input class="form-check selectable" type="checkbox" value="{{ $carrera->id }}"
                                name="carreras_seleccionadas[]">
                            <label class="form-check-label"></label>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-success">Asignar</button>
    {!! Form::close() !!}

    <script>
        document.getElementById('select-all').addEventListener('change', function() {
            var checkboxes = document.querySelectorAll('.selectable');
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = this.checked;
            }
        });
    </script>
@endsection()
