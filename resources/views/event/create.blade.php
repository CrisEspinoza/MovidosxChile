@extends('layouts.app')

@section('title', 'NewCatastrophe')

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

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                <form method="POST" action="{{route('event.store')}}">
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Crear medida evento a beneficio</h2></div>
                            <div class="panel-body">
                                <div class="form-group row">

                                    <div class="col-md-6">
                                        <label> Nombre de catastrofe: </label>
                                        <input  type="text" class="form-control" name="name" value="{{ $c->name}}"  readonly="readonly" >
                                    </div>

                                    <div class="col-md-6">
                                        <label> Nombre del evento a beneficio: </label>
                                        <input type="text" name = "nameEvent" class="form-control" placeholder="Zumbaton">

                                        @if ($errors->has('nameEvent'))
                                            <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('nameEvent') }}</strong>
                                            </span>
                                        @endif
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
                                        @if ($errors->has('start_date'))
                                            <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('start_date') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label> Fecha termino: </label>
                                        <div class="input-group date" data-provide="datepicker" >
                                            <input type="text" class="form-control" name="end_date">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                        @if ($errors->has('end_date'))
                                            <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('end_date') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label> Región: </label>
                                        <select class="form-control" name="region_id" id="select-region">
                                            <option value = ""> Seleccione una región </option>
                                            @foreach ($regions as $region)
                                                <option value="{{$region->id}}">{{ $region->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('region_id'))
                                            <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('region_id') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                    <div class="col-md-6">
                                        <label> Comuna: </label>
                                        <select class="form-control" name="commune_id" id=select-commune>
                                        </select>

                                        @if ($errors->has('commune_id'))
                                            <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('commune_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label> Dirección: </label>
                                        <input type="text" name = "address" class="form-control" placeholder="Avenida ....">
                                        @if ($errors->has('address'))
                                            <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <label> Meta(numero de asistentes?): </label>
                                        <input type="text" name = "goal" class="form-control" placeholder="100">
                                        @if ($errors->has('goal'))
                                            <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('goal') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6  ">
                                        <label> Actividades a realizar: </label>
                                        <textarea name="activities" class="form-control" rows="2" cols="50" placeholder="Juegos, bailes ... "  style=" resize: none;"></textarea>
                                        @if ($errors->has('activities'))
                                            <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('activities') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6  ">
                                        <label> Comidas y bebestibles: </label>
                                        <textarea name="foods" class="form-control" rows="2" cols="50" placeholder="Completos, choripanes... "  style=" resize: none;"></textarea>
                                        @if ($errors->has('foods'))
                                            <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('foods') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>


                            </div>

                            <div class="panel-footer">
                                <button class="btn btn-primary" type="submit">Crear evento a beneficio</button>
                                <a class="btn btn-danger" type="submit" id = "cancel" href="{{route('menu',$c->id)}}"> Cancelar </a>
                            </div>
                        </div>
                    </div>
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

