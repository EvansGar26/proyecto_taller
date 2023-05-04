<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{!! asset('estilo/assets/css/estilo_registro.css') !!}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    {!! Form::open(['url' => '/registro']) !!}



    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>¡Bienvenido!</h3>
                <p>¡No esperes más, regístrate ahora y comienza tu camino hacia una educación excepcional!</p>
                <button type="button" class="btn btn-light"><a style="color: rgb(0, 0, 0); text-decoration:none;"
                        href="{!! asset('login') !!}">Inciar sesión</a></button>

            </div>
            <div class="col-md-9 register-right">
                <!-- <ul class="nav nav-tabs nav-justified" id="myTab"
                            role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab"
                                    data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab"
                                    data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile"
                                    aria-selected="false">Alumno</a>
                            </li>
                        </ul> -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Regístrate y encuentra la mejor escuela para ti</h3>
                        @if ($errors->has('email'))
                            <ul class="list-unstyled">
                                @foreach ($errors->get('email') as $error)
                                    <li class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if ($errors->has('telefono'))
                            <ul class="list-unstyled">
                                @foreach ($errors->get('telefono') as $error)
                                    <li class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if ($errors->has('username'))
                            <ul class="list-unstyled">
                                @foreach ($errors->get('username') as $error)
                                    <li class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if ($errors->has('password'))
                            <ul class="list-unstyled">
                                @foreach ($errors->get('password') as $error)
                                    <li class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {{-- @if ($errors->has('nombre'))
                            <ul class="list-unstyled">
                                @foreach ($errors->get('nombre') as $error)
                                    <li class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if ($errors->has('ap_pat'))
                            <ul class="list-unstyled">
                                @foreach ($errors->get('ap_pat') as $error)
                                    <li class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @if ($errors->has('ap_mat'))
                            <ul class="list-unstyled">
                                @foreach ($errors->get('ap_mat') as $error)
                                    <li class="alert alert-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif --}}

                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{-- <input type="text" class="form-control" placeholder="Nombre *" value="" /> --}}
                                    {!! Form::text('nombre', old('nombre'), ['class' => 'form-control', 'placeholder' => 'Nombre *']) !!}
                                </div>
                                <div class="form-group">
                                    {{-- <input type="text" class="form-control" placeholder="Apellido paterno *"
                                        value="" /> --}}
                                    {!! Form::text('ap_pat', old('ap_pat'), ['class' => 'form-control', 'placeholder' => 'Apellido paterno *']) !!}
                                </div>
                                <div class="form-group">
                                    {{-- <input type="text" class="form-control" placeholder="Apellido materno *"
                                        value="" /> --}}
                                    {!! Form::text('ap_mat', old('ap_mat'), ['class' => 'form-control', 'placeholder' => 'Apellido materno *']) !!}
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Contraseña *" value="{{old('password')}}" />
                                    {{-- {!! Form::label('password', 'Introduce tu contraseña aquí') !!}
                                    {!! Form::password('password', old(''), ['class' => 'form-control', 'placeholder' => 'Contraseña*']) !!} --}}
                                </div>
                                <!-- <div class="form-group">
                                            <input type="password"
                                                class="form-control"
                                                placeholder="Confirm Password *"
                                                value="" />
                                        </div> -->
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Hombre </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span> Mujer </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{-- <input type="email" class="form-control" placeholder="Correo *" value="" /> --}}
                                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email *']) !!}

                                </div>
                                <div class="form-group">
                                    {{-- <input type="text" class="form-control" placeholder="Username *"
                                        value="" /> --}}
                                    {!! Form::text('username', old('username'), ['class' => 'form-control', 'placeholder' => 'Username *']) !!}

                                </div>
                                <div class="form-group">
                                    {{-- <input type="text" minlength="10" maxlength="10" name="txtEmpPhone"
                                        class="form-control" placeholder="Teléfono *" value="" /> --}}
                                    {!! Form::text('telefono', old('telefono'), [
                                        'minlength' => '10',
                                        'maxlength' => '10',
                                        'class' => 'form-control',
                                        'placeholder' => 'Teléfono *',
                                    ]) !!}

                                </div>
                                <div class="form-group">
                                    {{-- <input type="date" class="form-control" placeholder="Fecha de nacimiento *"
                                        value="" /> --}}
                                    {!! Form::date('fecha_naci', old('fecha_naci'), ['class' => 'form-control', 'placeholder' => 'Fecha de nacimiento *']) !!}
                                </div>
                                {!! Form::submit('Crear cuenta', ['class' => 'btnRegister my-2']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

</body>

</html>
