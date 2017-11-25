<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Movidos X Chile</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Principal.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand">

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @if (Auth::guest())
                            <li><a href="{{ url('/') }}"> Home </a></li>
                        @else
                            <!-- Navbar for normal user -->
                            @if (Auth::user()->role_id == 1)
                            <li><a href="#">Home</a></li>
                            @endif
                            <!-- Navbar for government user -->
                            @if (Auth::user()->role_id == 2)
                            <li><a href="#">Home</a></li>
                            @endif
                            <!-- Navbar for organization user -->
                            @if (Auth::user()->role_id == 3)
                            <li><a href="#">Home</a></li>
                            @endif
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                            <!-- Navbar for normal user -->
                            @if (Auth::user()->role_id == 1)
                            <li><a href="{{ route('user.edit' , Auth::user() ) }}">Mis datos</a></li>
                            @endif
                            <!-- Navbar for government user -->
                            @if (Auth::user()->role_id == 2)
                            <!--<li><a href="#">Roles de Usuario</a></li>-->
                            <li><a href="{{ route('catastrophe.index')}}">Lista de Catástrofes</a></li>
                            <!--<li><a href="#">Bancos</a></li>-->
                            @endif
                            <!-- Navbar for organization user -->
                            @if (Auth::user()->role_id == 3)
                            <li><a href="#">Mis eventos</a></li>
                            @endif
                            <!-- Default navbar -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

<<<<<<< HEAD
=======
    <script>
    function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(-33.444212,-70.653577),
        zoom:4,
    };

    var script = document.createElement('script');

 script.src = 'http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp';
 document.getElementsByTagName('head')[0].appendChild(script);

 window.eqfeed_callback = function(results) {
   for (var i = 0; i < results.features.length; i++) {
     var coords = results.features[i].geometry.coordinates;
     var latLng = new google.maps.LatLng(coords[1],coords[0]);
     var marker = new google.maps.Marker({
       position: latLng,
       map: map
     });
   }
 }
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7I-5tZicAc7BS97-GffJKP1dLqXBWwn8&callback=myMap"></script>

<script>
$(document).ready(function(){

	var clickEvent = false;
	$('#myCarousel').carousel({
		interval:   4000
	}).on('click', '.list-group li', function() {
			clickEvent = true;
			$('.list-group li').removeClass('active');
			$(this).addClass('active');
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.list-group').children().length -1;
			var current = $('.list-group li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.list-group li').first().addClass('active');
			}
		}
		clickEvent = false;
	});
})

$(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
	$('#myCarousel .list-group-item').outerHeight(triggerheight);
});
</script>

>>>>>>> 98353b5e94baed77b1e8beb5f89545dafbb64a1d
</body>
</html>
