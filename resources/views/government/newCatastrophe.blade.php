@extends('layouts.app')

@section('title', 'NewCatastrophe')

@section('content')
<script src="{{ asset('js/completer.js') }}"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <form method="POST" action="{{route('newCatastrophe.store')}}">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Agregar catástrofe</h2></div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Nombre memotécnico: </label>
                                <input type="text" name = "name" class="form-control" placeholder="27F">
                                
                                @if ($errors->has('name'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label> Tipo: </label>
                                <select class="form-control" name="typeCatastrophe_id" id="typeCatastrophe_id">
                                    @foreach ($typesCats as $type)
                                        <option value="{{$type->id}}">{{ $type->name_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Región: </label>
                                <select class="form-control" name="region_id" id="select-region">
                                    <option value = ""> Seleccione una región </option>
                                    @foreach ($regions as $region)
                                        <option value="{{$region->id}}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label> Comuna: </label>
                                <select class="form-control" name="location_id" id=select-commune>
                                    
                                    
                                </select>
                            </div>
                        </div>
						
                    	<div class="form-group row">
                            <div class="col-md-12">
                                <textarea name="description" class="form-control" rows="5" cols="50" placeholder="Descripción de la catástrofe..."></textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
	                    <div class="panel-footer">
	                        <button class="btn btn-primary" type="submit">Registrar catástrofe</button>
	                        <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('homeGovernment') }}"> Cancelar </a>
	                    </div>
                	</div>
            	</div>s
            </form>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/user/newCatastrophe.js"></script>
@endsection

