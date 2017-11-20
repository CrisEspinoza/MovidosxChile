@extends('layouts.app')

@section('title', 'ListCatastrophe')

@section('content')

<div class="container">
    <div class = "row">
        <div class="col-md-12" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <div class="panel panel-default">
                <div class="panel-heading"><h2> Lista de catástrofes </h2></div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Región</th>
                            <th>Comuna</th>
                            <th><center>Acción</center></th>
                            <th></th>
                        </tr>
                        @foreach ($catastrophes as $c)
                        <tr>
                            <td> {{ $c->name }} </td>
                            <td> {{ $c->typeCatastrophe->name_type }}</td>
                            <td> {{ $c->location->commune->region->name }} </td>
                            <td> {{ $c->location->commune->name }}</td>
                            <td> <a class="btn btn-warning" type="button" href="{{ route('listCatastrophe.show', $c->id) }} " > Ver </a></td>
                            <td> <a class="btn btn-warning" type="button" href="{{ route('AddActionsOrgan', $c->id) }}" > Agregar Medida </a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-info btn-lg" type="button" href="{{ route('homeUser') }}" > Atras </a>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
</div>

@endsection