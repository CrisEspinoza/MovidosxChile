@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de usuarios</div>

                    <div class="panel-body">

                        <table class="table" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>

                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->role->type_Rol}}</td>
                                    @if($user->banned == true)
                                    <td> Bloqueado </td>
                                    @else
                                    <td> Activo </td>
                                    @endif
                                    <td> <a class="btn btn-primary" type="button" href="{{ route('user.edit', $user->id) }}" > Editar </a> </td>
                                    <td> <a class="btn btn-warning" type="button" href="{{ route('user.show', $user->id) }}" > Ver </a> </td>
                                    <td> <a class="btn btn-danger" type="button" data-toggle="modal" data-target="#myModalBan"> Bloquear </a> </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModalBan" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">¿Estás seguro de que quieres eliminar a {{ $user->name }} {{ $user->last_name }}?</h4>
                </div>
                <div class="modal-body">
                    <p>Este usuario será bloqueado del sistema y no podrá iniciar sesión. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Si</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
            </div>

        </div>
    </div>

@endsection