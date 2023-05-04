<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
        }

        .card {
            width: 50%;
            margin: auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        }

        .card-header {
            background-color: #222D43;
            color: #fff;
            font-weight: bold;
            padding: 15px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .detail {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .detail label {
            font-weight: bold;
            margin-right: 10px;
        }

        .detail-value {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">

            @yield('contenido_central')

            <a href="{!! asset('cruds') !!}" class="btn btn-primary">REGRESAR A LOS CRUDS</a>

        </div>
    </div>

</body>

</html>
