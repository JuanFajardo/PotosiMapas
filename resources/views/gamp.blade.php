<!DOCTYPE html>
<html>
  <head>
    <style>
 	    html, body { height: 100%; margin: 0; }
      #map { min-height: 100%; width: 100%; float: left; }
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
  <body style="background-color:red; background-image:url('{{asset('/img/images.jpeg')}}'); background-repeat: no-repeat; background-attachment: fixed; ">
    @yield('titulo')

    <div style="float: left; width:15%; vertical-align: text-bottom; vertical-align: super; position: absolute; top:55px;   z-index: 2;">

      <div class="row" >
        <div class="col-md-12">
            @yield('menu')

            <?php $link = \URL::current(); $numero = explode('/', $link); ?>
            @if ( end($numero) == 'index.php' )
              <?php $menus = \App\Menu::all(); ?>
              <ul class="nav nav-list">
              @foreach($menus as $menu)
                <li ><label class="tree-toggler nav-header btn btn-primary"  style="width:100%;"> {!! $menu->menu !!}</label>
                  <?php $botones =\DB::table('botons')->where('tipo', '=', $menu->id)->orderBy('icono', 'asc')->get(); ?>
                  <ul class="nav nav-list">
                  @foreach($botones as $boton)
                    <li><a href="{{asset('index.php/Mapa/'.$boton->id)}}" class="btn btn-default"> {{$boton->boton}} </a></li>
                  @endforeach
                  </ul>
                </li>
              @endforeach
              </ul>
            @endif
                 <!--
                  <ul class="nav nav-list">
                      <li class=""><label class="tree-toggler nav-header btn btn-primary"  style="width:100%;"> 1. SERVICIOS BASICOS </label>
                          <ul class="nav nav-list @yield('m1')">
                            <li class=""><a href="{{asset('index.php/Mapa/4')}}" class="btn btn-default"> Agua Potable </a></li>
                            <li><a href="{{asset('index.php/Mapa/9')}}" class="btn btn-default"> Alcantarillado </a></li>
                            <li><a href="{{asset('index.php/Mapa/10')}}" class="btn btn-default"> Energia Electrica </a></li>
                            <li><a href="{{asset('index.php/Mapa/12')}}" class="btn btn-default"> Residuos Solidos </a></li>
                            <li><a href="{{asset('index.php/Mapa/13')}}" class="btn btn-default"> Congestionamiento </a></li>
                          </ul>
                      </li>

                      <li><label class="tree-toggler nav-header btn btn-primary" style="width:100%;"> 2. PLANIFICACION <br>URBANA </label>
                          <ul class="nav nav-list @yield('m2')">
                            <li><a href="{{asset('index.php/Mapa/14')}}" class="btn btn-default" style="width:100%;"> Proyeccion de la <br/>mancha Urbana </a></li>
                            <li><a href="{{asset('index.php/Mapa/15')}}" class="btn btn-default"> Estrutura Vial </a></li>
                            <li><a href="{{asset('index.php/Mapa/1')}}" class="btn btn-default"> Educacion </a></li>
                            <li><a href="{{asset('index.php/Mapa/5')}}" class="btn btn-default"> Salud </a></li>
                            <li><a href="{{asset('index.php/Mapa/16')}}" class="btn btn-default"> Comercio </a></li>
                            <li><a href="{{asset('index.php/Mapa/17')}}" class="btn btn-default"> Areas verdes </a></li>
                          </ul>
                      </li>

                      <li><label class="tree-toggler nav-header btn btn-primary" style="width:100%;"> 3. PLAN DE REHABILITACION <br>DEL CENTRO HISTORICO </label>
                          <ul class="nav nav-list @yield('m3')">
                            <li><a href="{{asset('index.php/Mapa/2')}}" class="btn btn-default"> Peatonalización </a></li>
                            <li><a href="{{asset('index.php/Mapa/7')}}" class="btn btn-default"> Criptas catacumbas </a></li>
                            <li><a href="{{asset('index.php/Mapa/8')}}" class="btn btn-default"> Rutas turísticas </a></li>
                            <li><a href="{{asset('index.php/Mapa/19')}}" class="btn btn-default"> Normativa de protección <br/>patrimonial </a></li>
                          </ul>
                      </li>
                  </ul>
                -->

        </div>
      </div>
    </div>


    <div id="map"></div>


    @yield('modal')

    @yield('js')
    <script type="text/javascript">
      $(document).ready( function () {
        $('label.tree-toggler').click(function () {
          $(this).parent().children('ul.tree').toggle(300);
        });
        $('label.tree-toggler').parent().children('ul.tree').toggle(1000);
      });


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3_Dqo-80xQtQXcth-uFD9Y71170wyi-4&callback=initMap">
    </script>
  </body>
</html>
