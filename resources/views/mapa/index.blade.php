@extends('gamp')

@section('titulo')
  <div style="float: left; width:100%; vertical-align: text-bottom; vertical-align: super; border:solid 1px black;">
    <h2> <p class="label label-info">  {{$datos[0]->boton}} </p> </h2>

    <?php
    $link = \URL::current();
    $numero = explode('/', $link);
    ?>

  </div>
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
  <div id="salud{{$dato->id}}" class="modal">
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
  @if( $datos[0]->tipo == "linea")
    var map;

    @foreach($mapas as $mapa)
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
    @endforeach

    function initMap() {
     var ulur = {lat: -19.5844895, lng: -65.7527863};
     map = new google.maps.Map(document.getElementById('map'), { zoom: 13,  center: ulur, mapTypeId: google.maps.MapTypeId.SATELLITE });
     @foreach($mapas as $mapa)
      area{{$mapa->idDetalleMapa}}();
     @endforeach
   }

  @elseif( $datos[0]->tipo == "punto")
    @foreach($datos as $dato)
      var modal{{$dato->id}} = document.getElementById('salud{{$dato->id}}');
    	var span{{$dato->id}} = document.getElementsByClassName("close")[0];
    @endforeach

    window.onclick = function(event) {
      @foreach($datos as $dato)
        if ( event.target == modal{{$dato->id}} )  modal{{$dato->id}}.style.display = "none";
      @endforeach
    }

    @foreach($datos as $dato)
      span{{$dato->id}}.onclick = function() { modal{{$dato->id}}.style.display = "none"; }
    @endforeach

    function initMap() {
     var uluru = {lat: -19.5844895, lng: -65.7527863};
     /*
    roadmap displays the default road map view. This is the default map type.
    satellite displays Google Earth satellite images.
    hybrid displays a mixture of normal and satellite views.
    terrain displays a physical map based on terrain information.
     */
     map = new google.maps.Map(document.getElementById('map'), { zoom: 13,  center: uluru, mapTypeId: google.maps.MapTypeId.SATELLITE });


     var pinColor = "{{ explode('#', $datos[0]->color)[1] }}";
     var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));

     @foreach($datos as $dato)
       //var image{{$dato->id}} = new google.maps.MarkerImage( '{{asset("/")}}/23394.png', new google.maps.Size(100,100));
       var place{{$dato->id}} = new google.maps.LatLng({{$dato->latitud}}, {{$dato->longitud}});
       var marker{{$dato->id}} = new google.maps.Marker({ position: place{{$dato->id}}, map: map ,  icon: pinImage, title: '{{$dato->titulo}}'  , animation: google.maps.Animation.DROP,});
       function showInfo{{$dato->id}}() {
         var modal{{$dato->id}} = document.getElementById('salud{{$dato->id}}');
         modal{{$dato->id}}.style.display = 'block';
       }
       google.maps.event.addListener(marker{{$dato->id}}, 'click', showInfo{{$dato->id}} );
     @endforeach
    }
  @endif
</script>
@endsection
