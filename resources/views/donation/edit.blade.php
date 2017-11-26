@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
                <form method="POST" action="{{route('donation.update', $donation->id)}}">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2> Medida {{$action->actionOP_type}} </h2></div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Nombre de catastrofe: </label>
                                    <input type="text" name = "name" class="form-control" value="{{$c->name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Fecha  de la donación:</label>
                                    <p>La fecha de la donación comienza el {{$action->start_date}} hasta el {{$action->end_date}}  </p>
                                </div>


                                <div class="col-md-6">
                                    <label> Banco:</label>
                                    <p> La donación será realizada en el {{$donation ->bank->name}}  </p>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label> Meta: </label>
                                    <p> La meta propuesta es tener ${{$action->goal}} recaudados</p>
                                </div>

                                <div class="col-md-6">
                                    <label> Monto actual: </label>
                                    <p> Actualmente se tienen ${{$donation->mount}} recaudados</p>
                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <label> Monto que desea donar: </label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="arroba"> <span class="glyphicon glyphicon-usd" aria-hidden="true"></span></span>
                                        <input type="text" name = "monto" class="form-control" placeholder="10000">
                                    </div>
                                    @if ($errors->has('monto'))
                                        <span class="help-block" style="color:red">
                                            <strong>{{ $errors->first('monto') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>



                            <div class="panel-footer">
                                <button class="btn btn-primary" type="submit">Realizar donación</button>
                                <a class="btn btn-danger" type="submit" id = "cancel" href="{{ route ('home') }}"> Cancelar </a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>






@endsection