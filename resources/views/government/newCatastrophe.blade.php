@extends('layouts.app')

@section('title', 'NewCatastrophe')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <form method="POST">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Agregar catástrofe</h2></div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Nombre mnemotécnico: </label>
                                <input type="text" id = "name" class="form-control" placeholder="27F">
                            </div>
                            <div class="col-md-6">
                                <label> Tipo: </label>
                                <select class="form-control" name="id_type">
                                    @foreach ($typesCats as $type)
                                        <option value="{{$type->id}}">{{ $type->name_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Región: </label>
                                <select class="form-control" name="id_region">
                                    @foreach ($regions as $region)
                                        <option value="{{$region->id}}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label> Comuna: </label>
                                <select class="form-control" name="id_commune">
                                    @foreach ($communes as $commune)
                                        <option value="{{ $commune->id}}">{{ $commune->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
						
                    	<div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="description" class="form-control" rows="10" cols="50" placeholder="Descripción de la catástrofe..."></textarea>
                            </div>
                        </div>
	                    <div class="panel-footer">
	                        <input class="btn btn-primary" type="submit" id = "add" value="Registrar catástrofe">
	                        <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('homeGovernment') }}"> Cancelar </a>
	                    </div>
                	</div>
            	</div>
            </form>
        </div>
    </div>
</div>
@endsection