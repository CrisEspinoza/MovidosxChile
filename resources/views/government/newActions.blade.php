@extends('layouts.app')

@section('title', 'NewActions')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/user/newCatastrophe.js"></script>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <form >
               
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Agregar medida</h2></div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Nombre memotécnico: </label>
                                <input type="text" name = "name" class="form-control" placeholder="27F" >
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5">
                                <label> Tipo: </label>
                                <select class="form-control" name="typeCatastrophe_id" id="typeCatastrophe_id" >

                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-10 col-md-offset-1">
                                <label> Descripción : </label>
                                <textarea name="description" class="form-control" rows="5" cols="50" placeholder="Escriba descripcion de la medida a crear" > </textarea>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary" type="submit">Registrar catástrofe</button>
                            <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('homeGovernment') }}"> Cancelar </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
