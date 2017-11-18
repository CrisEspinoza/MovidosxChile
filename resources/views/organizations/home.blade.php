@extends('layouts.app')

@section('title', 'HomeGovernment')

@section('content')

<div class = "container">
    <div class="jumbotron jumbotron-fluid">
        <h1> Lista de catastrofes </h1>
        <p> Revisa la lista de catastrofes y agrega alguna medida a estas </p>        
        <a class="btn btn-info btn-lg" type="button" href="{{ route ('listCatastropheOrgan') }}"> Revisar lista de catastrofes </a>
    </div>
</div>

<!-- <div class = "container">
    <div class="row">

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="https://image.flaticon.com/icons/svg/236/236822.svg" alt="..." width="200" height="200">
                <div class="caption">
                    <h3> Lista de Alumnos </h3>
                    <p> Revisa la lista todos los alumnos </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="https://image.flaticon.com/icons/svg/236/236834.svg" alt="..." width="200" height="200">
                <div class="caption">
                    <h3> Lista de profesores </h3>
                    <p> Revisa la lista de profesores actuales de la asignatura </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img src="https://image.flaticon.com/icons/svg/234/234695.svg" alt="..." width="200" height="200">
                <div class="caption">
                    <h3> Agregar nuevo profesor </h3>
                    <p> Agregar un nuevo profesor a una asignatura especifica </p>
                </div>
            </div>
        </div>

    </div>
</div> -->

@endsection