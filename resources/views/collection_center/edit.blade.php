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



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                <form method="POST" action="{{route('collectionCenter.update', $center->id)}}">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2> Medida {{$action->actionOP_type}} </h2></div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Nombre de catastrofe: </label>
                                    <input type="text" name = "name" class="form-control" value="{{$c->name}}">
                                </div>
                                <div class="col-md-6">
                                    <label> Nombre centro de acopio: </label>
                                    <input class="form-control" name="last_name" id="last_name" value="{{$center->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Fecha del centro de acopio: </label>
                                    <p>La fecha en que se recibirán bienes en el centro de acopio es del  {{$action->start_date}} al {{$action->end_date}}</p>
                                </div>

                                <div class="col-md-6">
                                    <label> Lugar del centro de acopio: </label>
                                    <p>El evento se relizará en {{$location->calle}}, comuna {{$location->commune->name}} de la región {{$location->commune->region->name}} </p>
                                </div>
                            </div>




                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Meta: </label>
                                    <p> La meta propuesta es conseguir {{$action->goal}} bienes de cualquier tipo</p>
                                </div>

                                <div class="col-md-6">
                                    <label> Bienes: </label>
                                    <p> El numero actual de bienes recaudados son {{$center->collected_assets}}   </p>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Tipo de bien: </label>
                                    <select class="form-control" name="type_asset" >
                                        <option value = ""> Seleccione un tipo de bien</option>
                                        @foreach ($assets as $as)
                                            <option value="{{$as->type}}">{{ $as->type }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('type_asset'))
                                        <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('type_asset') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                <div class="col-md-6">
                                    <label> Nombre del bien deseas donar: </label>
                                        <input type="text" name = "name_asset" class="form-control" value="">
                                    @if ($errors->has('name_asset'))
                                        <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('name_asset') }}</strong>
                                    </span>
                                    @endif
                                </div>


                            </div>


                            <div class="panel-footer">
                                <button class="btn btn-primary" type="submit">Me comprometo a donar a este bien</button>
                                <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('home') }}"> Cancelar </a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection