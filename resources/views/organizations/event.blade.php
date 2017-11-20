@extends('layouts.app')

@section('title', 'NewCatastrophe')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <form method="POST" action="{{route('newCatastrophe.store')}}">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Evento a beneficio a {{ $c->name }}</h2></div>
                    <div class="panel-body">
                        <div>
                            <div class="col-md-6">
                                <label> Nombre del evento a beneficio: </label>
                                <input type="text" name = "name" class="form-control" placeholder="Zumbaton">

                            </div>

                            <div class="col-md-6">
                                <label> Ciudad: </label>
                                <input type="text" name = "name" class="form-control" placeholder="Santiago">

                            </div>

                        <div>
                        
                            <div class="col-md-6">
                                <label> Comuna: </label>
                                <input type="text" name = "name" class="form-control" placeholder="3 semanas">

                            </div>

                            <div class="col-md-6">
                                <label> Direccion: </label>
                                <input type="text" name = "name" class="form-control" placeholder="3 semanas">

                            </div>
                        </div>
                        
                            <div class="col-md-6">
                                <label> Numero de contacto: </label>
                                <input type="text" name = "name" class="form-control" placeholder="3 semanas">

                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 col-md-offset-1 ">
                                <label> Descripcion: </label>
                                <textarea name="description" class="form-control" rows="5" cols="50" placeholder="Motivo del evento a beneficio ... "  style=" resize: none;"></textarea>

                            </div>
                        </div>

                        <div class="panel-footer">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route('listCatastrophe.edit', $c->id) }}"> Cancelar </a>
                        </div>
                    </div>
                </div>s
            </form>
        </div>
    </div>
</div>

@endsection

