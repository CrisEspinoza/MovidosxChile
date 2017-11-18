@extends('layouts.app')

@section('title', 'NewCatastrophe')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <form method="POST" action="{{route('newCatastrophe.store')}}">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Centros de acopio</h2></div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Nombre de catastrofe: </label>
                                <input type="text" name = "name" class="form-control" placeholder="27F">
                                
                            </div>
                            <div class="col-md-6">
                                <label> Tipo: </label>
                                <input type="text" name = "name" class="form-control" placeholder="Terremoto">

                            </div>
                        </div>

                        <div>
                        
                            <div class="col-md-6">
                                <label> Nombre del centro de acopio: </label>
                                <input type="text" name = "name" class="form-control" placeholder="1313">

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
                                <textarea name="description" class="form-control" rows="5" cols="50" placeholder="Motivo del centro de acopio ..."></textarea>

                            </div>
                        </div>

	                    <div class="panel-footer">
	                        <button class="btn btn-primary" type="submit">Enviar solicitud de donación</button>
	                        <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('AddActionsOrgan') }}"> Cancelar </a>
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

