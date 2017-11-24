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
                                        <input type="text" name = "name" class="form-control" value="{{ $user->name }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label> Apellido: </label>
                                        <input class="form-control" name="last_name" id="last_name" value="{{ $user->last_name }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label> RUN: </label>
                                        <input disabled class="form-control" name="run" id="run" value="{{ $user->run }}">

                                    </div>
                                    <div class="col-md-4">
                                        <label> Correo: </label>
                                        <input class="form-control" name="email" id="email" value="{{ $user->email }}">

                                    </div>
                                    <div class="col-md-4">
                                        <label> Estado: </label>
                                        
                                            @if ($user->role_id != 2  )    
                                                @if ($user->banned)
                                                    <input disabled class="form-control" name="banned" id="banned" value="Bloqueado"> 
                                                @else
                                                    <input disabled class="form-control" name="banned" id="banned" value="Activo">
                                                @endif
                                            @else

                                            <select class="col-md-6 form-control" name="banned" id="banned">
                                                @if ($user->banned)
                                                    <option value="{{ 1 }}" selected> Bloqueado </option>
                                                    <option value="{{ 0 }}"> Activo </option>
                                                @else
                                                    <option value="{{ 1 }}"> Bloqueado </option>
                                                    <option value="{{ 0 }}" selected> Activo </option>
                                                @endif
                                            @endif
                                            </select>
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                    <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('user.index') }}"> Cancelar </a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection