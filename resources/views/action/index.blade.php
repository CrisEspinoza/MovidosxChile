@extends('layouts.app')

@section('title', 'government')

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
        <div class = "row">
            <div class="col-md-12" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                <div class="panel panel-default">
                    @if (Auth::user()->role_id == 1)
                        <div class="panel-heading"><h2> Medidas de la catastrofe {{$c->name}}</h2></div>
                    @endif
                    @if (Auth::user()->role_id == 2 and $aux == 5)
                        <div class="panel-heading"><h2> Medidas pendientes </h2></div>
                    @endif
                    @if (Auth::user()->role_id == 2 and $aux == 3)
                        <div class="panel-heading"><h2> Medidas por terminar y aun no cumplen su meta </h2></div>
                    @endif
                    @if (Auth::user()->role_id == 3 and $aux == 0)
                        <div class="panel-heading"><h2> Medidas creadas por {{Auth::user()->name}}</h2></div>
                    @endif

                    @if (Auth::user()->role_id == 3 and $aux == 1)
                        <div class="panel-heading"><h2>  Medidas de la catastrofe {{$c->name}}</h2></div>
                    @endif

                    <div class="panel-body">
                        <table class="table table-hover">
                            
                            @foreach ($medidas as $medida)

                                @if ($medida->actionOP_type == 'Donación' )
                                    @foreach ($donaciones as $donacion)
                                        @if($donacion->id == $medida->actionOP_id)
                                             <div class="panel panel-success" >
                                                <div class="panel-heading" style="background-color:#58FA58">
                                                    <h3 class="panel-title"> Donación </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Meta donación:</label>
                                                            <p> {{"$ " .$medida->goal}} </p>
                                                            @if (Auth::user()->role_id == 1)
                                                                <a class="btn btn-success" type="button" href="{{route('action.edit',$medida->id)}}"> Participar en medida </a>
                                                                @endif
                                                            @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 2)
                                                                <a class="btn btn-success" type="button" href="{{route('action.edit',$medida->id)}}"> Ver medida </a>
                                                                @endif
                                                            @if ($aux == 3)
                                                                    <a class="btn btn-warning" type="button" href="{{route('apportGovernment',$medida->id)}}"> Aportar Dinero</a>
                                                                @endif
                                                        </div>

                                                        <div class="col-md-6 ">
                                                            <label>Progreso:</label>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{$medida->progress}}" aria-valuemin="0" aria-valuemax="{{$medida->goal}}" style="width:{{$medida->progress}}%">
                                                                        {{$medida->progress}}%
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($medida->actionOP_type == 'Centro de acopio' )
                                    @foreach ($centros as $centro)
                                        @if($centro->id == $medida->actionOP_id)
                                             <div class="panel panel-info" >
                                                <div class="panel-heading" style="background-color:#819FF7">
                                                    <h3 class="panel-title">  Centro de acopio </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label> Nombre centro de acopio: </label>
                                                                <p>{{$centro->name}}</p>
                                                                @if (Auth::user()->role_id == 1)
                                                                    <a class="btn btn-success" type="button" href="{{route('action.edit',$medida->id)}}"> Participar en medida </a>
                                                                @endif
                                                                @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 2)
                                                                    <a class="btn btn-success" type="button" href="{{route('action.edit',$medida->id)}}"> Ver medida </a>
                                                                @endif
                                                                @if ($aux == 3)
                                                                    <a class="btn btn-warning" type="button" href="{{route('apportGovernment',$medida->id)}}"> Aportar Dinero</a>
                                                                @endif
                                                        </div>
                                                        <div class="col-md-6 ">
                                                            <label>Progreso:</label>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{$medida->progress}}" aria-valuemin="0" aria-valuemax="{{$medida->goal}}" style="width: {{$medida->progress}}%">
                                                                        {{$medida->progress}}%
                                                                    </div>
                                                                </div>
                                                        </div>                                                                                                          
                                                    </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($medida->actionOP_type == 'Evento a beneficio' )
                                    @foreach ($eventos as $evento)
                                        @if($evento->id == $medida->actionOP_id)

                                             <div class="panel panel-warning">
                                                <div class="panel-heading" style="background-color:#F781D8">
                                                    <h3 class="panel-title"> Evento a beneficio </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">                                                    
                                                            <label> Nombre evento: </label>
                                                                <p>{{$evento->name}}</p>
                                                                @if (Auth::user()->role_id == 1)
                                                                    <a class="btn btn-success" type="button" href="{{route('action.edit',$medida->id)}}"> Participar en medida </a>
                                                                @endif
                                                                @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 2)
                                                                    <a class="btn btn-success" type="button" href="{{route('action.edit',$medida->id)}}"> Ver medida </a>
                                                                @endif
                                                                @if ($aux == 3)
                                                                    <a class="btn btn-warning" type="button" href="{{route('apportGovernment',$medida->id)}}"> Aportar Dinero</a>
                                                                @endif
                                                        </div>
                                                            <div class="col-md-6">
                                                                <label>Progreso de avance:</label>
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{$medida->progress}}" aria-valuemin="0" aria-valuemax="{{$medida->goal}}}" style="width: {{$medida->progress}}%">
                                                                            {{$medida->progress}}%
                                                                        </div>
                                                                    </div>

                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($medida->actionOP_type == 'Voluntariado' )
                                     <div class="panel panel-danger">
                                        <div class="panel-heading" style="background-color:#F78181">
                                            <h3 class="panel-title">Voluntariado </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label> Meta voluntarios: </label>
                                                        <p>{{$medida->goal .' voluntarios'}}</p>
                                                        @if (Auth::user()->role_id == 1)
                                                            <a class="btn btn-success" type="button" href="{{route('action.edit',$medida->id)}}"> Participar en medida </a>
                                                        @endif
                                                        @if (Auth::user()->role_id == 3 || Auth::user()->role_id == 2)
                                                            <a class="btn btn-success" type="button" href="{{route('action.edit',$medida->id)}}"> Ver medida </a>
                                                        @endif
                                                        @if ($aux == 3)
                                                            <a class="btn btn-warning" type="button" href="{{route('apportGovernment',$medida->id)}}"> Aportar Dinero</a>
                                                        @endif
                                                    
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <label>Progreso:</label>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{$medida->progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$medida->progress}}%">
                                                                    {{$medida->progress}}%
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                           
                            @endforeach

                            
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-info btn-lg" type="button" href="{{ route('catastrophe.index')}}" > Atras </a>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
        </div>
    </div>

@endsection