@extends('gamp')

@section('titulo')
 <h3> {{$datos[0]->boton}} </h3>
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

        <p style="font-size:20px;">   <b>MONTO : </b> {{$dato->monto_total}} Bs.</p>
        <p style="font-size:20px;">   <b>AREA : </b> {{$dato->superficie_construida}}</p>
        <p style="font-size:20px;">   <b>ZONA : </b> {{$dato->zona}}</p>
	<p style="font-size:20px;">   <b>DISTRITO : </b> {{$dato->distrito}}</p>

	<p style="font-size:20px;">   <b>FUENTE : </b> {{$dato->estado}} </p>
        <p style="font-size:20px;">   <b>TIPO : </b> {{$dato->plazo}} </p>
        <p style="font-size:20px;">   <b>CAUDAL : </b> {{$dato->beneficiario_estudiante}} </p>

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
    function area(){
      var flightPlanCoordinates = [

		@foreach($datos as $dato)
    		new google.maps.LatLng({{$dato->latitud}}, {{$dato->longitud}}),
                @endforeach
  	  ];
  	  flightPath7 = new google.maps.Polyline( { path: flightPlanCoordinates, geodesic: true, strokeColor: '#fc1f01', strokeOpacity: 0.5, strokeWeight: 15, } );
      flightPath7.setMap(map);
    }


     function initMap() {
     var uluru = {lat: -19.5844895, lng: -65.7527863};
     map = new google.maps.Map(document.getElementById('map'), { zoom: 13, center: uluru });



      area();
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
