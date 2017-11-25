@extends('layouts.app')

@section('content')

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <img src="http://glacierhub.org/wp-content/uploads/2017/06/greenland-tsunami-damage.jpg" height="400" width="760">
           <div class="carousel-caption">
            <h4><a href="#">Tsunami en la region del Biobio causó gran destrucción en la zona.</p>
          </div>
        </div><!-- End Item -->

         <div class="item">
          <img src="https://pbs.twimg.com/media/C2c2Ja_XAAEJy5v.jpg" height="400" width="760">
           <div class="carousel-caption">
            <h4><a href="#">Tsunami en Santiago</a></h4>
            <p>Tsunami en Santiago deja a 0 muertos.</p>
          </div>
        </div><!-- End Item -->

        <div class="item">
          <img src="http://i.frikkinawesome.com/2013/09/Volc%C3%A1n-de-Fuego-Guatemala-By-Adrian-Rohnfelder.jpg" height="400" width="760">
           <div class="carousel-caption">
            <h4><a href="#">Volcan chaiten</a></h4>
            <p>Volcan chaiten vuelve a reactivarse. </p>
          </div>
        </div><!-- End Item -->

        <div class="item">
          <img src="http://cdn.c.photoshelter.com/img-get/I0000tQuE2ZnSVOU/s/860/688/DSC-6274.jpg" height="400" width="760">
           <div class="carousel-caption">
            <h4><a href="#">Terremoto en la zona norte del pais</a></h4>
            <p>Terremoto de grado 6.5 afectó a la zona norte durante la tarde. </p>
          </div>
        </div><!-- End Item -->

        <div class="item">
          <img src="https://noticias.eltiempo.es/wp-content/uploads/2014/11/temporal.jpg" height="400" width="760">
           <div class="carousel-caption">
            <h4><a href="#">Temporal afecta zona sur</a></h4>
            <p>Se preveen grandes perdidas en el sur debido al temporal. </p>
          </div>
        </div><!-- End Item -->

      </div><!-- End Carousel Inner -->


    <ul class="list-group col-sm-4">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>Tsunami en la region del Biobio causó gran destrucción en la zona.</h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>Tsunami en Santiago</h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>Volcan Chaiten se reactiva</h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>magna aliquyam erat, sed diam voluptua</h4></li>
      <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>tempor invidunt ut labore et dolore magna aliquyam erat</h4></li>
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
</div>

<div class="container">
  <div class="jumbotron jumbotron-fluid">
  <div class="row">
    <div class="col-md-4"><h3>Voluntariado</h3>Se podrá ver la necesidad de voluntarios por catastrofe</div>
    <div class="col-md-4"><h3>Catastrofes</h3>Se tendrá una lista de las catastrofes con toda su información</div>
    <div class="col-md-4"><h3>Donaciones</h3>A travez del sitio web se podrán realizar donaciones</div>
  </div>
</div>
</div>

@endsection
