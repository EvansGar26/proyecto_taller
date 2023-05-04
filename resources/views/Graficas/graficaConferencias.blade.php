@extends('Cruds.master')
@section('contenido_central')
    <h2>Conferencias favoritas</h2>
    <style>
        .temas {
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            margin-bottom: 10px;
            font-size: 16px;
            color: #6c757d;
            border-radius: 5px;
            text-align: justify;
        }

        .temas:hover {
            background-color: #e9ecef;
            color: #212529;
        }
    </style>
    <a href="{{ route('pdf.generarAsiCon') }}" class="btn btn-warning mx-3 my-3">Generar PDF</a>
    <div class="row">
        <div class="col-md-4 temas">
            @foreach ($temasCon as $tema)
                <h6>- {!! $tema !!}</h6>
            @endforeach
        </div>
        <div class="col-md-8">
            <canvas id="myChart"></canvas>
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
                url: "{{ route('graficas-conferencias') }}",
                type: "GET",
                dataType: 'json',
                success: function(data1) {
                    const ctx = document.getElementById('myChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: data1.tema,
                            datasets: [{
                                label: '# de asistencia',
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
                }
            });
        });
    </script>
@endsection()
