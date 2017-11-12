@extends('layouts.app')

@php ($pagina = 'quienes')

@section('title', 'Desarrolladores')

@section('content')

<div class="col-md-12 text-center" style="color: white">

<h1> <b>Nuestro plantel</b> </h1>
<h2> <b> DISEÑO DE BASE DE DATOS - Segundo semestre 2017</b></h2>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <center>
  <div class="carousel-inner" role="listbox">

    <div class="item active">   
    <br> <h2><b> Julio Serrano <br> <p> Responsable del grupo </p> </b> </h2><br>
      <img src="{{ asset('images/plantillas/julio.png') }}" title="Andres Muñoz - (Machine)" width="500" height="500" alt="...">
      <div class="carousel-caption">
      </div>
    </div>

   <div class="item">
    <br> <h2><b> Cristian Espinoza <br> <p> Back end </p> </b></h2> <br> 
      <img src="{{ asset('images/plantillas/cristian.jpg') }}" title="Cristian Espinoza - (Huaso)" width="500" height="500" alt="...">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
    <br> <h2><b> Tomas gutiérrez <br> <p> Front-end Developer </p>   </b></h2><br>
      <img src="{{ asset('images/plantillas/tomas.png') }}" title="Cristian Sepulveda - (El bilingue)" width="500" height="500" alt="...">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
    <br> <h2><b> Javier Arredondo  <br> <p>Administrador de base de datos </p>  </b></h2><br> 
      <img src="{{ asset('images/plantillas/javier.jpg') }}" title="Javier Arredondo - (Ingeniero software)" width="500" height="500" alt="...">
      <div class="carousel-caption">      
      </div>
    </div>

  </div>
  </center>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>               

@endsection