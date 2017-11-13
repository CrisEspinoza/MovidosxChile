@extends('layouts.app')

@section('title', 'HomeGovernment')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="POST">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2> Catastrofe "nombre" Falta rellenar con los datos  </h2></div>
                    <div class="panel-body">

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="otro"> Título de la catastrofe </label>
                                <input id="otro" ng-model="otro" type="text" class="form-control" placeholder="Tsunami">
                            </div>

                            <div class="col-md-6">
                                <label for="otro"> Lugar de catastrofe </label>
                                <input id="otro" ng-model="otro" type="text" class="form-control" placeholder="Valdivia">
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="date-input">Fecha de catrastrofe</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="2017-01-01" id="date-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="time-input">Hora de episodio</label>
                                <div class="col-10">
                                    <input class="form-control" type="time" value="23:55:00" id="time-input">
                                </div>
                            </div>
                        </div>

                        <label for="text"> Descripción de la catastrofe: </label>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="text" ng-model="text" class="form-control" rows="10" cols="50" placeholder="......."></textarea>
                            </div>

                        </div>

                        <label for="text"> Opiniones: </label>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="text" ng-model="text" class="form-control" rows="10" cols="50" placeholder="......."></textarea>
                            </div>

                        </div>

                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-info btn-lg" type="button" href="{{ route('homeGovernment') }}" > Atras </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection