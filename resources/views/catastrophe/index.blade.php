@extends('layouts.app')

@section('title', 'government')

@section('content')

    <div class="container">
        <div class = "row">
            <div class="col-md-12" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2> Catástrofes registradas</h2></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>


                                <th>N°</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Región</th>
                                <th>Comuna</th>
                                <th> <center>Acciónes</center></th>
                                <th></th>
                            </tr>
                            @foreach ($catastrophes as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->typeCatastrophe->name_type }}</td>
                                <td>{{ $c->location->commune->region->name  }}</td>
                                <td>{{ $c->location->commune->name }}</td>
                                @if (Auth::user()->role_id == 2)
                                    <td> <a class="btn btn-warning" type="button" href="#" > Ver </a> </td>
                                    <td> <a class="btn btn-danger" type="button" href="#" > Finalizar</a> </td>
                                @endif

                                @if (Auth::user()->role_id == 3)
                                    <td> <a class="btn btn-warning" type="button" href="{{route('menu',$c->id)}}"> Agregar medida </a></td>
                                    <td> <a class="btn btn-warning" type="button" href="#"> Ver medidas </a></td>
                                @endif

                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-info btn-lg" type="button" href="#" > Atras </a>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
        </div>
    </div>

@endsection