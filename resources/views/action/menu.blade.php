@extends('layouts.app')

@section('title', 'ListCatastrophe')

@section('content')


    <div class = "container" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
        <div class="col-md-6">
            <div class="thumbnail">
                <img src="https://image.flaticon.com/icons/svg/291/291932.svg" alt="..." width="200" height="200">
                <div class="caption">
                    <h3> Centros de acopio </h3>
                    <p>Revisa los centros de acopio que se encuentran disponibles</p>
                    <p><a href="{{ route('createCollCenter',$c->id) }}" class="btn btn-primary" role="button">Ir a Centros de acopio</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="thumbnail">
                <img src="https://image.flaticon.com/icons/svg/291/291930.svg" alt="..." width="200" height="200">
                <div class="caption">
                    <h3> Voluntariados </h3>
                    <p>Únete a los distintos voluntariados que existen</p>
                    <p><a href="{{ route('createVol',$c->id) }}" class="btn btn-primary" role="button">Ir a voluntariados</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class = "container" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
        <div class="col-md-6">
            <div class="thumbnail">
                <img src="https://image.flaticon.com/icons/svg/291/291891.svg" alt="..." width="200" height="200">
                <div class="caption">
                    <h3>Eventos a beneficios</h3>
                    <p>Revisa los distintos tipos de eventos que se encuentran disponibles</p>
                    <p><a href="{{ route('createEvent',$c->id) }}" class="btn btn-primary" role="button">Ir a eventos a beneficios</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="thumbnail">
                <img src="https://image.flaticon.com/icons/svg/291/291889.svg" alt="..." width="200" height="200">
                <div class="caption">
                    <h3>Donaciones de dinero</h3>
                    <p>Ingresa a esta opción para poder realizar tu aporte</p>
                    <p><a href="{{ route('createDonation',$c->id) }}" class="btn btn-primary" role="button">Ir donacion de dineros</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection