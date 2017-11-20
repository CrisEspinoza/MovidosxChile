@extends('layouts.app')

@section('title', 'ListCatastrophe')

@section('content')


<div class = "container">
    <div class="col-md-6">
        <div class="thumbnail">
            <img src="https://image.flaticon.com/icons/svg/291/291932.svg" alt="..." width="200" height="200">
            <div class="caption">
                <h3> Centros de acopio </h3>
                <p>Revisa los centros de acipio que se encuentran disponibles</p>
                <p><a href="{{ route ('collectionCenterOrgan') }}" class="btn btn-primary" role="button">Ir a Centros de acopio</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="thumbnail">
            <img src="https://image.flaticon.com/icons/svg/291/291930.svg" alt="..." width="200" height="200">
            <div class="caption">
                <h3> Voluntariados </h3>
                <p>Unete a los distintos voluntariados que existen</p>
                <p><a href="{{ route ('VolunOrgan') }}" class="btn btn-primary" role="button">Ir a voluntariados</a></p>
            </div>
        </div>
    </div>
</div>
<div class = "container">
    <div class="col-md-6">
        <div class="thumbnail">
            <img src="https://image.flaticon.com/icons/svg/291/291891.svg" alt="..." width="200" height="200">
            <div class="caption">
                <h3>Eventos a beneficios</h3>
                <p>Revisa los distintos tipos de eventos que se encuentran disponibles</p>
                <p><a href="{{ route ('eventOrgan', $c->id) }}" class="btn btn-primary" role="button">Ir a eventos a beneficios</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="thumbnail">
            <img src="https://image.flaticon.com/icons/svg/291/291889.svg" alt="..." width="200" height="200">
            <div class="caption">
                <h3>Donaciones de dinero</h3>
                <p>Ingresa a esta opción para poder realizar tu aporte</p>
                <p><a href="{{ route ('DonnarMonayOrgan') }}" class="btn btn-primary" role="button">Ir donacion de dineros</a></p>
            </div>
        </div>
    </div>
</div>

@endsection