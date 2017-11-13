@extends('layouts.app')

@section('title', 'ListCatastrophe')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><h2> Lista de catastrofes </h2></div>
        <div class="panel-body">
            <table class="table table-hover">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Avance</th>
                </tr>
                <tr ng-repeat = "x in exercises" >
                    <td>  </td>
                    <td>  </td>
                    <td>  </td>
                    <td><button type="button" class="btn btn-warning" href="#" >Ver </button></td>
            </table>
        </div>
        <div class="panel-footer">
            <a class="btn btn-info btn-lg" type="button" href="{{ route('homeGovernment') }}" > Atras </a>
        </div>
        <div class="panel-footer"></div>
    </div>
</div>

@endsection