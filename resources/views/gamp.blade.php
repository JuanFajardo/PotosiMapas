<!DOCTYPE html>
<html>
  <head>
    <style>
 	    html, body { height: 100%; margin: 0; }
      #map { min-height: 100%; width: 90%; float: left;}
      .modal { display: none; /* Hidden by default */ position: fixed; /* Stay in place */ z-index: 1; /* Sit on top */ padding-top: 100px; /* Location of the box */ left: 0; top: 0; width: 100%; /* Full width */ height: 100%; /* Full height */ overflow: auto; /* Enable scroll if needed */ background-color: rgb(0,0,0); /* Fallback color */ background-color: rgba(0,0,0,0.4); /* Black w/ opacity */ }
      /* Modal Content */
      .modal-content { background-color: #fefefe; margin: auto; padding: 20px; border: 1px solid #888; width: 40%; }
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
    <div id="map"></div>
    <div style="float: right; width:10%; vertical-align: text-bottom; vertical-align: super;">
      <?php $datos = \App\Boton::all(); ?>
      @foreach($datos as $dato)
      <div class="row" style="padding:5px;">
        <div class="col-md-12">
          <a href="{{asset('index.php/Mapa/'.$dato->id)}}" class="btn btn-info form-control" style="font-size:20px;"> <i class="{{$dato->icono}}" style="text-align:left;"></i> {{$dato->boton}} </a>
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