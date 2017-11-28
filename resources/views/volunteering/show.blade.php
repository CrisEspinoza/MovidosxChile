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
                <form method="POST" action="{{route('volunteering.update', $volunteering->id)}}">
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
                                    <label> Tipo de trabajo: </label>
                                    <p> El trabajo que será realizado en este voluntariado es de tipo {{$volunteering->type_work}}</p>
                                </div>



                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Fecha del voluntariado: </label>
                                    <p>El voluntariado comienza el {{$action->start_date}} hasta el {{$action->end_date}}  </p>
                                </div>

                                <div class="col-md-6">
                                    <label> Lugar del voluntariado: </label>
                                    <p>El voluntariado será realizado en en {{$location->calle}}, comuna {{$location->commune->name}} de la región {{$location->commune->region->name}} </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Meta: </label>
                                    <p> La meta propuesta es tener {{$action->goal}} voluntarios</p>
                                </div>

                                <div class="col-md-6">
                                    <label> Voluntarios actuales: </label>
                                    <p> El número actual de voluntarios es {{$volunteering->current_voluntaries}} </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Voluntarios necesarios : </label>
                                    <p> El mínimo de voluntarios para realizar los trabajos es de {{$volunteering->min_voluntaries}} y el máximo de voluntarios es de {{$volunteering->max_voluntaries}} </p>
                                </div>

                                <div class="col-md-6">
                                    <label> Perfil del voluntario: </label>
                                    <p> Se necesita un voluntario con las siguientes características {{$volunteering->profile_voluntary}} </p>
                                </div>


                            </div>


                            <div class="panel-footer">
                                @if (Auth::user()->role_id == 2)
                                    <a class="btn btn-success" type="submit" id = "cancel" href="{{ route ('home') }}"> Aceptar medida </a>                               
                                    <a class="btn btn-danger" type="button" href="{{ route ('volunteering.destroy' , $action->id) }}"> Rechazar medida </a>
                                @endif
                                <a class="btn btn-info" type="submit" id = "cancel" href="{{ route ('home') }}"> Volver</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection