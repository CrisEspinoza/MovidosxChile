@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Únete a nosotros</h2></div>

                <div class="panel-body" >
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <div  class="input-group">
                                    <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                </div>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Apellidos</label>
                            <div class="col-md-6">
                                <div  class="input-group">
                                    <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
                                </div>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('run') ? ' has-error' : '' }}">
                            <label for="run" class="col-md-4 control-label">RUN</label>
                            <div class="col-md-6">
                                <div  class="input-group">
                                    <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></span>
                                    <input id="run" type="text" class="form-control" name="run" value="{{ old('run') }}" oninput="formatRUT()" required autofocus>
                                </div>

                                @if ($errors->has('run'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('run') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electrónico</label>

                            <div class="col-md-6">
                                <div  class="input-group">
                                    <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <div  class="input-group">
                                    <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <div  class="input-group">
                                    <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
