@extends('Cruds.master')
@section('contenido_central')
    <h2>Carreras favoritas</h2>
    <style>
        .carreras {
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            margin-bottom: 10px;
            font-size: 16px;
            color: #6c757d;
            border-radius: 5px;
            text-align: justify;
        }

        .carreras:hover {
            background-color: #e9ecef;
            color: #212529;
        }
    </style>
    <a href="{{ route('pdf.generarCarFav') }}" class="btn btn-warning mx-3 my-3">Generar PDF</a>
    <div class="row">
        <div class="col-md-12 carreras">
            <h3>Tecnologías e ingenierías</h3>
            @foreach ($carreras as $carrera)
                <h6>- {!! $carrera !!}</h6>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12 carreras">
            <h3>Ciencias</h3>
            @foreach ($carreras2 as $carrera2)
                <h6>- {!! $carrera2 !!}</h6>
            @endforeach
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-10 offset-md-1">
            <canvas id="myChart2"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
            $.ajax({
                url: "{{ route('graficas-carreras') }}",
                type: "GET",
                dataType: 'json',
                success: function(data1) {
                    const ctx = document.getElementById('myChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: data1.nombres_carreras,
                            datasets: [{
                                label: '# de votos',
                                data: data1.cantidad,
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });

                    const ctx2 = document.getElementById('myChart2').getContext('2d');
                    new Chart(ctx2, {
                        type: 'bar',
                        data: {
                            labels: data1.nombres_carreras2,
                            datasets: [{
                                label: '# de votos',
                                data: data1.cantidad2,
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection()
