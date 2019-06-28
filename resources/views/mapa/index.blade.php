@extends('gamp')

@section('titulo')
 <h3 class="label "> {{$datos[0]->boton}} </h3>
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
<?php $contador=0;
$colores = ["#F53D0B", "#F1F50B", "#64F50B", "#0BF5C7", "#0766B1", "#7807B1", "#B107A2", "#1A0108"];
?>
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
  	  flightPath7 = new google.maps.Polyline( { path: flightPlanCoordinates, geodesic: true, strokeColor: '{{$colores[$contador]}}', strokeOpacity: 0.5, strokeWeight: 15, } );
      flightPath7.setMap(map);
      <?php
      $contador++;
        if ( $contador > 7)
          $contador = 0;
      ?>
    }
    @endforeach


    function initMap() {
     var uluru = {lat: -19.5844895, lng: -65.7527863};
     map = new google.maps.Map(document.getElementById('map'), { zoom: 13, center: uluru });
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
     map = new google.maps.Map(document.getElementById('map'), { zoom: 13, center: uluru });


     @foreach($datos as $dato)
       //var image{{$dato->id}} = new google.maps.MarkerImage( '{{asset("/")}}/23394.png', new google.maps.Size(100,100));
       var place{{$dato->id}} = new google.maps.LatLng({{$dato->latitud}}, {{$dato->longitud}});
       var marker{{$dato->id}} = new google.maps.Marker({ position: place{{$dato->id}}, map: map , title: '{{$dato->titulo}}'  , animation: google.maps.Animation.DROP,});
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
