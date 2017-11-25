@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                    <form method="POST" action="#">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}


                        @if($action->actionOP_type =='Evento a beneficio')
                            <div class="panel panel-default">
                                <div class="panel-heading"><h2> Medida {{$action->actionOP_type}} </h2></div>
                                <div class="panel-body">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label> Nombre de catastrofe: </label>
                                            <input type="text" name = "name" class="form-control" value="{{$c->name}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label> Nombre evento a beneficio: </label>
                                            <input class="form-control" name="last_name" id="last_name" value="{{$event->name}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label> Fecha inicio: </label>
                                            <input type="text" name = "name" class="form-control" value="{{$action->start_date}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label> Fecha termino: </label>
                                            <input class="form-control" name="last_name" id="last_name" value="{{$action
                                            ->end_date}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label> Region: </label>
                                            <input type="text" name = "name" class="form-control" value="{{$region->name}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label> Comuna: </label>
                                            <input class="form-control" name="last_name" id="last_name" value="{{$commune->name}}">
                                        </div>
                                    </div>

                                    <div class="panel-footer">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                        <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('home') }}"> Cancelar </a>
                                    </div>

                                </div>
                            </div>

                        @endif


                        
                    </form>
                </div>
            </div>
        </div>

@endsection