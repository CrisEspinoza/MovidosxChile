@extends('layouts.app')

@section('title', 'NewCatastrophe')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <form method="POST">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2> Catástrofe:  {{$c->name }}</h2></div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Nombre nmemotécnico: </label>
                                <p> {{$c->name}} </p>
                            </div>
                            <div class="col-md-6">
                                <label> Tipo: </label>
                                <p> {{ $c->typeCatastrophe->name_type  }}</p>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Región: </label>
                                <p> {{$c->location->commune->region->name }}</p>
                            </div>
                            <div class="col-md-6">
                                <label> Comuna: </label>
                                <p> {{$c->location->commune->name}} </p>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea disabled id="description" class="form-control" style=" resize: none;">{{ $c->description }}</textarea>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('listCatastropheOrgan') }}"> Cancelar </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection