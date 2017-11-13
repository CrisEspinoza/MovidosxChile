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
                            <th>Descripción</th>
                            <th>Tipo</th>
                        </tr>
                        @foreach ($catastrophes as $c)
                        <tr>
                            <td> name </td>
                            <td> {{ $c->description }}</td>
                            <td> {{ $c->typeCatastrophe->name_type}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-info btn-lg" type="button" href="{{ route('homeGovernment') }}" > Atras </a>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
</div>

@endsection