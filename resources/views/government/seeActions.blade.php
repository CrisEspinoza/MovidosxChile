@extends('layouts.app')

@section('title', 'seeActions')

@section('content')

<div class="container">
    <div class = "row">
        <div class="col-md-10 col-md-offset-1" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <div class="panel panel-default">
                <div class="panel-heading"><h2> Lista de catástrofes </h2></div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Avance</th>
                            <th> <center>Acciónes</center></th>
                            <th></th>
                        </tr>
                        <tr>
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td> <a class="btn btn-warning" type="button" href="#"> Ver (Aun no lo se) </a></td>
                            <td> <a class="btn btn-warning" type="button" href="#"> Eliminar </a></td>
                        </tr>
                    </table>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-info btn-lg" type="button" href="{{ route('listCatastropheGov') }}" > Atras </a>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
</div>

@endsection