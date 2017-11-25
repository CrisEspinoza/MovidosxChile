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
                                    <input  type="text" class="form-control" name="name" value="{{ $c->name}}"  readonly="readonly" >
                                </div>
                                <div class="col-md-6">
                                    <label> Meta: </label>
                                    <input type="text" name = "goal" class="form-control" placeholder="10.000">
                                    @if ($errors->has('goal'))
                                        <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('goal') }}</strong>
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
                                    <label> Cantidad mínima de voluntarios </label>
                                    <input type="text" name = "min_voluntaries" class="form-control" placeholder="10">

                                    @if ($errors->has('min_voluntaries'))
                                        <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('min_voluntaries') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label> Cantidad máxima de voluntarios </label>
                                    <input type="text" name = "max_voluntaries" class="form-control" placeholder="20">
                                    @if ($errors->has('max_voluntaries'))
                                        <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('max_voluntaries') }}</strong>
                                    </span>
                                    @endif
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

                                    @if ($errors->has('type_work'))
                                        <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('type_work') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label> Dirección: </label>
                                    <input type="text" name = "address" class="form-control" placeholder="Avenida ....">
                                    @if ($errors->has('address'))
                                        <span class="help-block" style="color:red">
                                                <strong>{{ $errors->first('address') }}</strong>
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
                                <div class="col-md-12 ">
                                    <label> Perfil del voluntario: </label>
                                    <textarea name="profile_voluntary" class="form-control" rows="2" cols="50" placeholder="..."></textarea>

                                    @if ($errors->has('profile_voluntary'))
                                        <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('profile_voluntary') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>



                        <div class="panel-footer">
                            <button class="btn btn-primary" type="submit">Agregar medida voluntariado</button>
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
