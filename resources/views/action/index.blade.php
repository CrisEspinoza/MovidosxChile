@extends('layouts.app')

@section('title', 'government')

@section('content')

    <div class="container">
        <div class = "row">
            <div class="col-md-12" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2> Medidas de la catastrofe {{$c->id}}</h2></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            

                            


                            @foreach ($medidas as $medida)

                                @if ($medida->actionOP_type == 'Donación' )
                                     <div class="panel panel-success" >
                                        <div class="panel-heading" style="background-color:#58FA58">
                                            <h3 class="panel-title"> Donación </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Meta donación:</label>
                                                    <p> {{"$ " .$medida->goal}} </p>
                                                </div>
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <label>Progreso:</label>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                                    <span class="sr-only">45% Complete</span>
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($medida->actionOP_type == 'Centro de acopio' )
                                     <div class="panel panel-info" >
                                        <div class="panel-heading" style="background-color:#819FF7">
                                            <h3 class="panel-title">  Centro de acopio </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <label>Progreso:</label>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                                    <span class="sr-only">45% Complete</span>
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($medida->actionOP_type == 'Evento a beneficio' )
                                     <div class="panel panel-warning">
                                        <div class="panel-heading" style="background-color:#F781D8">
                                            <h3 class="panel-title"> Evento a beneficio </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <label>Progreso:</label>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                                    <span class="sr-only">45% Complete</span>
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($medida->actionOP_type == 'Voluntariado' )
                                     <div class="panel panel-danger">
                                        <div class="panel-heading" style="background-color:#F78181">
                                            <h3 class="panel-title">Voluntariado </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                    <div class="col-md-4 col-md-offset-4">
                                                        <label>Progreso:</label>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                                    <span class="sr-only">45% Complete</span>
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