@extends('auth.layout.index')

@section('title')
    Iniciar Sesión
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                {!! Form::open(['method' => 'POST','url' => route('login')]) !!}
                <div class="card" data-background="color" data-color="tk">
                    <div class="header">
                        <h3 class="title">Iniciar Sesión</h3>
                    </div>
                    <div class="content">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Usuario</label>
                            {!! Form::email('email',old('email'),[
                                'class' => 'form-control input-no-border',
                                'placeholder' => 'Ingrese Usuario'
                            ]) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            {!! Form::password('password',[
                                'class' => 'form-control input-no-border',
                                'placeholder' => 'Ingrese Contraseña'
                            ]) !!}
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-fill btn-wd ">Entrar</button>
                        <!-- div class="forgot">
                            <a href="#pablo">Forgot your password?</a>
                        </div -->
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
