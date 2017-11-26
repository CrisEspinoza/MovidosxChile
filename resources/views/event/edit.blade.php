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
                <form method="POST" action="{{route('event.update', $event->id)}}">
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
                                    <label> Nombre evento a beneficio: </label>
                                    <input class="form-control" name="last_name" id="last_name" value="{{$event->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Fecha del evento </label>
                                    <p>La fecha del evento es el {{$action->start_date}}</p>
                                </div>

                                <div class="col-md-6">
                                    <label> Lugar del evento: </label>
                                    <p>El evento se relizará en {{$location->calle}}, comuna {{$location->commune->name}} de la región {{$location->commune->region->name}} </p>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Actividades a realizar: </label>
                                    <p> Las actividades que se realizarán en el evento son {{$event->activity}}</p>
                                </div>
                                <div class="col-md-6">
                                    <label> Comidas y bebestibles </label>
                                    <p>Las comidas y bebestibles que se encontrarán disponibles el día del evento son {{$event->foods}}</p>
                                </div>

                            </div>


                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Meta: </label>
                                    <p> La meta propuesta es tener {{$action->goal}} asitentes</p>
                                </div>

                                <div class="col-md-6">
                                    <label> Participantes: </label>
                                    <p> El numero actual de participantes es  {{$event->participants}} </p>
                                </div>



                            </div>

                            <div class="panel-footer">
                                <button class="btn btn-primary" type="submit">Participar en el evento</button>
                                <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('home') }}"> Cancelar </a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection