@extends('Cruds.master')
@section('contenido_central')
    <h2>Carreras en las universidades</h2>
    <a href="carreras_universidades/create" class="btn btn-success">Asignar mas carreras</a>
    <a href="{{ route('pdf.generarUniCar')}}" class="btn btn-warning mx-3">Generar PDF</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="centrado">ID</th>
                <th class="centrado">Universidad</th>
                <th class="centrado">Carrera</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carreras as $carrera)
                <tr>
                    <td class="centrado">{!! $carrera->id !!}</td>
                    <td class="centrado">{!! $carrera->universidades->nombre !!}</td>
                    <td class="centrado">{!! $carrera->carreras->nombre !!}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    


    </form>
    <div class="pagination-container">
        {{ $carreras->links() }}
    </div>
@endsection()
