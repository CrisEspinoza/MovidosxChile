@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Lista de usuarios</h2></div>
                    <div class="col-md-6">
                        <ul class="nav nav-pills">
                            @if($aux == 2)
                                <li class="active"><a data-toggle="pill" href="#admin">Administradores</a></li>
                                <li><a data-toggle="pill" href="#organ">Organizaciones</a></li>
                                <li><a data-toggle="pill" href="#user">Usuarios</a></li>
                            @elseif($aux == 1)
                                <li><a data-toggle="pill" href="#admin">Administradores</a></li>
                                <li><a data-toggle="pill" href="#organ">Organizaciones</a></li>
                                <li class="active"><a data-toggle="pill" href="#user">Usuarios</a></li>
                            @else
                                <li><a data-toggle="pill" href="#admin">Administradores</a></li>
                                <li class="active"><a data-toggle="pill" href="#organ">Organizaciones</a></li>
                                <li><a data-toggle="pill" href="#user">Usuarios</a></li>
                            @endif
                        </ul>
                    </div>

                    <div class="tab-content">
                        @if($aux == 2)
                        <div id="admin" class="tab-pane fade in active">
                        @else
                        <div id="admin" class="tab-pane fade">
                        @endif
                            <div class="panel-body">
                                <table class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Estado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    @foreach ($admins as $admin)
                                        <tr>
                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->email }}</td>
                                            @if($admin->banned == true)
                                                <td> Bloqueado </td>
                                            @else
                                                <td> Activo </td>
                                            @endif
                                            <td> <a class="btn btn-primary" type="button" href="{{ route('user.edit', $admin->id) }}" > Editar </a> </td>
                                            <td> <a class="btn btn-warning" type="button" href="{{ route('user.show', $admin->id) }}" > Ver </a> </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        @if($aux == 3)
                        <div id="organ" class="tab-pane fade in active">
                        @else
                        <div id="organ" class="tab-pane fade">
                        @endif
                            <div class="panel-body">

                                <table class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Estado</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    @foreach ($organs as $organ)
                                        <tr>
                                            <td>{{ $organ->name }}</td>
                                            <td>{{ $organ->email}}</td>
                                            @if($organ->banned == true)
                                                <td> Bloqueado </td>
                                            @else
                                                <td> Activo </td>
                                            @endif
                                            <td> <a class="btn btn-primary" type="button" href="{{ route('user.edit', $organ->id) }}" > Editar </a> </td>
                                            <td> <a class="btn btn-warning" type="button" href="{{ route('user.show', $organ->id) }}" > Ver </a> </td>

                                            <td>
                                                <form class="form" method="post" action="{{ route('user.destroy', $organ->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger">Bloquear</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        @if($aux == 1)
                        <div id="user" class="tab-pane fade in active">
                        @else
                        <div id="user" class="tab-pane fade">
                        @endif
                            <div class="panel-body">

                                <table class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>RUN</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Estado</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->run }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->last_name}}</td>
                                            <td>{{ $user->email}}</td>
                                            @if($user->banned == true)
                                                <td> Bloqueado </td>
                                            @else
                                                <td> Activo </td>
                                            @endif
                                            <td> <a class="btn btn-primary" type="button" href="{{ route('user.edit', $user->id) }}" > Editar </a> </td>
                                            <td> <a class="btn btn-warning" type="button" href="{{ route('user.show', $user->id) }}" > Ver </a> </td>
                                            <td>
                                                <form class="form" method="post" action="{{ route('user.destroy', $user->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger">Bloquear</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection