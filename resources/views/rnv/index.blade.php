@extends('layouts.app')

@section('title', 'government')

@section('content')

    <div class="container">
        <div class = "row">
            <div class="col-md-12" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2> Voluntarios inscritos RNV</h2></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>

                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Mail</th>
                                <th>Diponible</th>
                                <th></th>
                            </tr>
                            @foreach ($rnvs as $rnv)
                            <tr>
                                <td>{{ $rnv->name }}</td>
                                <td>{{ $rnv->last_name }}</td>
                                <td>{{ $rnv->mail }}</td>
                                @if($rnv->disponible == 1)
                                    <td>Si</td>
                                @endif
                                @if($rnv->disponible == 0)
                                    <td> No</td>
                                @endif


                                


                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-info btn-lg" type="button" href="{{'home'}}" > Atras </a>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
        </div>
    </div>

@endsection