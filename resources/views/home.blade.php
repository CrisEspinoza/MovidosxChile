@extends('layouts.app')

@section('content')

@if (Auth::user()->role_id == 2)
<div class = "container" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
    <div class="jumbotron jumbotron-fluid">
        <h1> Nueva catastrofe </h1>
        <p> Agrega una nueva catastrofe para mantener al tanto a los ciudadanos del pais </p>
        <a class="btn btn-info btn-lg" type="button" href="{{ route('catastrophe.create') }}"> Agregar nueva catastrofe </a>
    </div>
</div>

<div class = "container" >
    <div class="row">

        <div class="col-md-5 col-md-offset-1" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <div class="thumbnail">
                <img src="https://image.flaticon.com/icons/svg/236/236822.svg" alt="..." width="200" height="200">
                <div class="caption">
                    <h3> Lista de usuarios </h3>
                    <p> Revisa la lista todos los usuarios </p>
                    <a class="btn btn-info btn-lg" type="button" href={{ route('user.index') }}> Revisa los usuarios </a>
                </div>
            </div>
        </div>

        <div class="col-md-5" style="filter: alpha(opacity=25); -moz-opacity: 0.3; opacity: 0.9; -khtml-opacity: 0.3;">
            <div class="thumbnail">
                <img src="https://image.flaticon.com/icons/svg/236/236834.svg" alt="..." width="200" height="200">
                <div class="caption">
                    <h3> Agregar nueva organización </h3>
                    <p> Agrega una nueva organización para expandir la compañia </p>
                    <a class="btn btn-info btn-lg" type="button" href={{ route('organization.create') }}> Agregar nueva organización </a>
                </div>
            </div>
        </div>
    </div>
</div> 
@endif

@if (Auth::user()->role_id == 3)
<div class = "container">
    <div class="jumbotron jumbotron-fluid">
        <h1> Lista de catastrofes </h1>
        <p> Revisa la lista de catastrofes y agrega alguna medida a estas </p>        
        <a class="btn btn-info btn-lg" type="button" href="{{ route('catastrophe.index')}}"> Revisar lista de catastrofes </a>
    </div>
</div>
@endif

@endsection
