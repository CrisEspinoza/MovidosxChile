@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                <form method="POST" action="{{ route('user.update', $user->id) }}">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Editando al usuario {{ $user->name }} {{ $user->last_name }}</h2></div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Nombre: </label>
                                    <p> {{ $user->name }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label> Apellido: </label>
                                    <p> {{ $user->last_name }} </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label> RUN: </label>
                                    <p> {{ $user->run }} </p>

                                </div>
                                <div class="col-md-4">
                                    <label> Correo: </label>
                                    <p>{{ $user->email }}</p>

                                </div>
                                <div class="col-md-4">
                                    <label> Estado: </label>

                                        @if ($user->banned)
                                            <input disabled class="form-control" name="banned" id="banned" value="Bloqueado">
                                        @else
                                            <input disabled class="form-control" name="banned" id="banned" value="Activo">
                                        @endif
                                </div>
                            </div>

                            <div class="panel-footer">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('home') }}"> Cancelar </a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection