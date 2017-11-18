@extends('layouts.app')

@section('title', 'NewCatastrophe')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                <form method="POST" action="{{route('volunteering.store')}}">
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Crear medida voluntariado</h2></div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Nombre de catastrofe: </label>

                                    <select class="form-control" name="cat_id">
                                        @foreach ($catastrophes as $cat)
                                            <option value="{{$cat->id}}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <label> Meta: </label>
                                    <input type="text" name = "goal" class="form-control" placeholder="10.000">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Fecha Inicio: </label>
                                    <div class="input-group date" data-provide="datepicker" >
                                        <input type="text" class="form-control" name="start_date">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label> Fecha termino: </label>
                                    <div class="input-group date" data-provide="datepicker" >
                                        <input type="text" class="form-control" name="end_date">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Cantidad mínima de voluntarios </label>
                                    <input type="text" name = "min_voluntaries" class="form-control" placeholder="10">
                                </div>

                                <div class="col-md-6">
                                    <label> Cantidad máxima de voluntarios </label>
                                    <input type="text" name = "max_voluntaries" class="form-control" placeholder="20">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Tipo de trabajo: </label>
                                    <select class="form-control" name="type_work" >
                                            <option value = ""> Seleccione un tipo de trabajo </option>
                                            <option value="Construccion">{{"Construccion"}}</option>
                                            <option value="Salud">{{"Salud"  }}</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12 ">
                                    <label> Perfil del voluntario: </label>
                                    <textarea name="profile_voluntary" class="form-control" rows="2" cols="50" placeholder="..."></textarea>

                                </div>
                            </div>

                        </div>



                        <div class="panel-footer">
                            <button class="btn btn-primary" type="submit">Agregar medida voluntariado</button>
                            <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('AddActionsOrgan') }}"> Cancelar </a>
                        </div>
                    </div>
            </div>s
            </form>
        </div>
    </div>
    </div>


    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
    </head>

    <head>
        <script>
            $( document ).ready(function() {
                $('#fecha').datepicker();
            });
        </script>
    </head>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/user/newCatastrophe.js"></script>
@endsection
