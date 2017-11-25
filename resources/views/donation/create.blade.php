@extends('layouts.app')

@section('title', 'NewCatastrophe')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <form method="POST" action="{{route('donation.store')}}">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Crear medida donación de dinero</h2></div>
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Nombre de catastrofe: </label>
                                <input  type="text" class="form-control" name="name" value="{{ $c->name}}"  readonly="readonly" >
                                
                            </div>
                            <div class="col-md-6">
                                <label> Meta: </label>
                                <input type="text" name = "goal" class="form-control" placeholder="10.000">
                                @if ($errors->has('goal'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('goal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Fecha Inicio: </label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input type="text" class="form-control" name="start_date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                                @if ($errors->has('start_date'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label> Fecha termino: </label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input type="text" class="form-control" name="end_date">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>

                                @if ($errors->has('end_date'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label> Banco: </label>

                                <select class="form-control" name="bank" id="bank">
                                    <option value = ""> Seleccione un banco </option>
                                    @foreach ($banks as $bank)
                                        <option value="{{$bank->id}}">{{ $bank->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('bank'))
                                    <span class="help-block" style="color:red">
                                        <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        

                        </div>



	                    <div class="panel-footer">
	                        <button class="btn btn-primary" type="submit">Agregar medida donación</button>
	                        <a class="btn btn-danger" type="submit" id = "cancel" href="#"> Cancelar </a>
	                    </div>
                	</div>
            	</div>s
            </form>
        </div>
    </div>
</div>


<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
</head>


<head>
    <script>
        $( document ).ready(function() {
            $('#fecha').datepicker();
        });
    </script>
</head>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/user/newCatastrophe.js"></script>
@endsection

