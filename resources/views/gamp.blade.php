<!DOCTYPE html>
<html>
  <head>
    <style>
 	    html, body { height: 100%; margin: 0; }
      #map { min-height: 93%; width: 90%; float: left;}
      .modal { display: none; /* Hidden by default */ position: fixed; /* Stay in place */ z-index: 1; /* Sit on top */ padding-top: 100px; /* Location of the box */ left: 0; top: 0; width: 100%; /* Full width */ height: 100%; /* Full height */ overflow: auto; /* Enable scroll if needed */ background-color: rgb(0,0,0); /* Fallback color */ background-color: rgba(0,0,0,0.4); /* Black w/ opacity */ }
      /* Modal Content */
      .modal-content { background-color: #fefefe; margin: auto; padding: 20px; border: 1px solid #888; width: 75%; }
      /* The Close Button */
      .close { color: #aaaaaa; float: right; font-size: 28px; font-weight: bold; }
      .close:hover,
      .close:focus { color: #000; text-decoration: none; cursor: pointer; }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  </head>
  <body>
    @yield('titulo')
    <div id="map"></div>

    <div style="float: right; width:10%; vertical-align: text-bottom; vertical-align: super;">
      <?php $datos = \App\Boton::all(); ?>

          <a href="#" class="btn btn-primary form-control" style="font-size:15px;"> 1. SERVICIOS BASICOS </a>
          &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/4')}}" class="btn btn-info form-control"> Agua Potable </a>
          &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/9')}}" class="btn btn-info form-control"> Alcantarillado </a>
          &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/10')}}" class="btn btn-info form-control"> Energia Electrica </a>
          &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/12')}}" class="btn btn-info form-control"> Residuos Solidos </a>
          &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/13')}}" class="btn btn-info form-control"> Congestionamiento </a><br><br>

          <a href="#" class="btn btn-primary form-control" style="font-size:15px;"> 2. PLANIFICACION URBANA </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/14')}}" class="btn btn-info form-control"> Proyeccion de la mancha Urbana </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/15')}}" class="btn btn-info form-control"> Estrutura Vial </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/1')}}" class="btn btn-info form-control"> Educacion </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/5')}}" class="btn btn-info form-control"> Salud </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/16')}}" class="btn btn-info form-control"> Comercio </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/17')}}" class="btn btn-info form-control"> Areas verdes </a><br><br>

          <a href="#" class="btn btn-primary form-control" style="font-size:15px;"> 3. PLAN DE REHABILITACION DEL CENTRO HISTORICO </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/2')}}" class="btn btn-info form-control"> Peatonalización </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/7')}}" class="btn btn-info form-control"> Criptas catacumbas </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/8')}}" class="btn btn-info form-control"> Rutas turísticas </a>
            &nbsp;&nbsp;&nbsp;<a href="{{asset('index.php/Mapa/19')}}" class="btn btn-info form-control"> Normativa de protección patrimonial </a>

      @foreach($datos as $dato)
      <div class="row" style="padding:5px;">
        <div class="col-md-12">
          <!-- <a href="{{asset('index.php/Mapa/'.$dato->id)}}" class="btn btn-info form-control" style="font-size:15px;"> {{$dato->boton}} </a> -->
        </div>
      </div>
      @endforeach
    </div>
    @yield('modal')

    @yield('js')
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3_Dqo-80xQtQXcth-uFD9Y71170wyi-4&callback=initMap">
    </script>
  </body>
</html>
