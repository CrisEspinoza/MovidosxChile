@extends('layouts.app')

@section('content')

    <div class = "container">
        <div class = "row">
            <div class="col-md-8 col-md-offset-2">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ Session::get('message', '') }} </strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST" action="{{route('organization.store')}}">
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Agregar organización</h2></div>

                        <div class="panel-body">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label> Nombre: </label>
                                    <input type="text" name = "name" class="form-control" placeholder="Un techo para el país">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Correo: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" placeholder="correo@micorreo.cl" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Confirmar correo: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" placeholder="correo@micorreo.cl" name="emailv">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8">
                                    <label>Telefono contacto: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" placeholder="98765432" name="run">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button class="btn btn-primary" type="submit">Registrar organización</button>
                            <a class="btn btn-danger" id = "cancel" href="{{ route ('home') }}"> Cancelar </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection