@extends('gamp')

@section('titulo')
  <div style="float: left; width:100%; vertical-align: text-bottom; vertical-align: super; position: absolute;   z-index: 1; text-align: center;">
    <h2> <p class="label label-info">  {{$datos[0]->boton}} </p> </h2>
    <?php
    $link = \URL::current();
    $numero = explode('/', $link);
    ?>
  </div>
@endsection


@section('menu')
  <?php $menus = \App\Menu::all(); ?>
  <ul class="nav nav-list">
  @foreach($menus as $menu)
    <li ><label class="tree-toggler nav-header btn btn-primary"  style="width:100%;"> {!! $menu->menu !!}</label>
      <?php $botones =\DB::table('botons')->where('tipo', '=', $menu->id)->orderBy('icono', 'asc')->get(); ?>

      @if(  $menu->id == $menuId)
        <ul class="nav nav-list">
      @else
        <ul class="nav nav-list tree">
      @endif

      @foreach($botones as $boton)
        <li><a href="{{asset('index.php/Mapa/'.$boton->id)}}" class="btn btn-default"> {{$boton->boton}} </a></li>
      @endforeach
      </ul>
    </li>
  @endforeach
  </ul>
@endsection

@section('m1')
@if( end($numero) == "4" || end($numero) == "9" || end($numero) == "10" || end($numero) == "12" || end($numero) == "13" )

@else
tree
@endif
@endsection

@section('m2')
@if( end($numero) == "14" || end($numero) == "15" || end($numero) == "1" || end($numero) == "5"  || end($numero) == "16" || end($numero) == "17"  )

@else
tree
@endif
@endsection

@section('m3')
@if( end($numero) == "2" || end($numero) == "7" || end($numero) == "8" || end($numero) == "19" )

@else
tree
@endif
@endsection

@section('modal')
  @foreach($datos as $dato)
  <div id="salud{{$dato->id}}" class="modal" >
    <div class="modal-content">
      <p> <h2>{{$dato->titulo}}</h2> </p><br>
      <div class="row">
        <div class="col-md-5" style="float:left;">
          <img src="{{asset('RughHXvNTFm9zzBett0zzPpFGaE2r7mjB9/'.$dato->foto)}}" width="450">
        </div>
        <div class="col-md-6" style="float:right; vertical-align: text-bottom; vertical-align: super;">
          <p style="font-size:18px;">
            {!! $dato->descripcion !!}
          </p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection



@section('js')
<script type="text/javascript">
  var map;

  //*******************************************************************************************************************
  @foreach($mapas as $mapa)

    ////////////////////////////////INICIO_LINEAS
    @if( $mapa->estado == "linea")
    function area{{$mapa->idDetalleMapa}}(){
      var flightPlanCoordinates = [
		      @foreach($datos as $dato)
            @if($mapa->idDetalleMapa == $dato->idDetalleDato)
    		      new google.maps.LatLng({{$dato->latitud}}, {{$dato->longitud}}),
            @endif
          @endforeach
  	  ];
  	  flightPath7 = new google.maps.Polyline( { path: flightPlanCoordinates, geodesic: true, strokeColor: '{{$mapa->color}}', strokeOpacity: 0.7, strokeWeight: 10, } );
      flightPath7.setMap(map);
    }
    @endif
    ////////////////////////////////FIN_LINEAS


    ////////////////////////////////INICIO_PUNTOS
    @if( $mapa->estado == "punto" )

      @foreach($datos as $dato)
        @if($mapa->idDetalleMapa == $dato->idDetalleDato)
          var modal{{$dato->id}} = document.getElementById('salud{{$dato->id}}');
          var span{{$dato->id}} = document.getElementsByClassName("close")[0];
        @endif
      @endforeach




    @endif
    ////////////////////////////////FIN_PUNTOS

  @endforeach
  //*******************************************************************************************************************


  window.onclick = function(event) {
    @foreach($mapas as $mapa)
    @foreach($datos as $dato)
      @if($mapa->idDetalleMapa == $dato->idDetalleDato)
        if ( event.target == modal{{$dato->id}} )  modal{{$dato->id}}.style.display = "none";
      @endif
    @endforeach
    @endforeach
  }

  @foreach($mapas as $mapa)
  @foreach($datos as $dato)
    @if($mapa->idDetalleMapa == $dato->idDetalleDato)
      span{{ $dato->id }}.onclick = function() { modal{{$dato->id}}.style.display = "none"; }
    @endif
  @endforeach
  @endforeach



  //////////////////////////////////////////////////////////////////////////////
  function initMap() {
      var uluru = {lat: -19.5844895, lng: -65.7527863};
      /*roadmap satellite hybrid terrain */
      map = new google.maps.Map(document.getElementById('map'), { zoom: 13,  center: uluru, mapTypeId: google.maps.MapTypeId.SATELLITE });

      @foreach($mapas as $mapa)

        //---------------------LINEAS
        @if( $mapa->estado == "linea")
          area{{$mapa->idDetalleMapa}}();
        @endif
        //---------------------LINEAS

        //------------------PUNTOS
        @if( $mapa->estado == "punto")
          var pinColor = "{{ explode('#', $mapa->color)[1] }}";
          var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
              new google.maps.Size(21, 34),
              new google.maps.Point(0,0),
              new google.maps.Point(10, 34));


          @foreach($datos as $dato)
            @if( $mapa->idDetalleMapa == $dato->idDetalleDato )
              var place{{$dato->id}} = new google.maps.LatLng({{$dato->latitud}}, {{$dato->longitud}});
              var marker{{$dato->id}} = new google.maps.Marker({ position: place{{$dato->id}}, map: map ,  icon: pinImage, title: '{{$dato->titulo}}'  , animation: google.maps.Animation.DROP,});
              function showInfo{{$dato->id}}() {
                var modal{{$dato->id}} = document.getElementById('salud{{$dato->id}}');
                    modal{{$dato->id}}.style.display = 'block';
              }
              google.maps.event.addListener(marker{{$dato->id}}, 'click', showInfo{{$dato->id}} );
            @endif
          @endforeach
        @endif
        //------------------PUNTOS

      @endforeach

  }
  //////////////////////////////////////////////////////////////////////////////

</script>
@endsection
