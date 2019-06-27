<!DOCTYPE html>
<html>
  <head>
    <style>
 	    html, body { height: 100%; margin: 0; }
      #map { min-height: 90%; width: 100%; }
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
  </head>
  <body>
<h3>
<div class='label label-success'>Ruta Bajada - Camacho - Chichas - Fortunato Gumiel - Barcelona - Puente Tinkuy - Calle Zambrana - Calle América</div>
<div class='label label-primary'>Ruta Subida - La Chaca - Cancha Velarde - Cobija</div><br>
<div class='label label-danger'>Ruta Ch'utillos - Arco de Cobija - Mejillones - H. Vasquez - Av. Tinkuy - Ilustres - Antofagasta - Av. Sevilla - Av. Litoral - Campo Marte - Cívica - Camacho - Iglesia San Bernardo
</h3>
    <div id="map"></div>

    <div id="salud0" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">PUNTO DE SALUD SEVILLA</b><br>
        Calle Ilustres Esql Av. Tinkuy
      </div>
    </div>

    <div id="salud" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">PUNTO DE SALUD ANTOFAGASTA</b>
        Av. Antofagasta Esql Av. Sevilla
      </div>
    </div>

    <div id="salud1" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">PUNTO DE SALUD H. VASQUEZ</b><br>
        H. Vasques Esq. Av. Tinkuy
      </div>
    </div>

    <div id="salud2" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">PUNTO DE SALUD ILUSTRES</b><br>
        Av. Ilustres Esq. America
      </div>
    </div>

    <div id="salud3" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">PUNTO DE SALUD TINKUY</b><br>
        Av. Tinkuy Esq.  Caracas
      </div>
    </div>

    <div id="salud4" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">PUNTO SLIM Y DEFENSORÍAS MUNICIPALES DE LA NIÑEZ Y ADOLECENCOA POTOSÍ</b><br>
        Av. Litoral Entre San Alberto y Colquechaca
      </div>
    </div>

    <!-- ROPA -->
    <div id="ropa" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">COMERCIO DE ROPA</b><br>
        <b>Punto 1</b> - Av. Antofagasta entre Fortunato Gumiel y Wenceslao Alba<br>
        <b>Punto 2</b> - Av. Antofagasta entre Wenceslao Alba y San Alberto<br>
        <b>Punto 3</b> - Av. Universitaria entre Av. Highland Players y Gabriel Rene Moreno<br>
      </div>
    </div>
    <!-- TRANSITO -->
    <div id="transito" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;"> TRANSITO DE MOVILIDAD</b><br>
        <b>Calle 1</b> -  Wenceslao Alba<br>
        <b>Calle 1</b> - Av. Highland Players<br>
      </div>
    </div>
    <!-- COMIDA ing roberto pozo -->
    <div id="comida" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">COMERCIO DE COMIDA</b><br>
        <b>Punto 1</b> - Av. Antofagasta  entre San Alberto y Sevilla<br>
        <b>Punto 2</b> - Av. Antofagasta  entre Av. Ferroviaria y Av. Highland Players<br>
      </div>
    </div>
    <!-- VERDURAS -->
    <div id="verduras" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">COMERCIO DE VERDURAS</b><br>
        <b>Punto</b> - Av. Ferroviaria entre Av. Litoral y Pando<br>
      </div>
    </div>
    <!-- ABARROTES -->
    <div id="abarrotes" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">COMERCIO DE ABARROTES</b><br>
        <b>Punto</b> - Av. Ferroviaria entre Av. Universitaria y Av. Litoral <br>
      </div>
    </div>


    <!-- BASUDERO -->
    <div id="basudero" class="modal">
      <div class="modal-content">
        <p>Gobierno Autónomo Municipal de Potosí - Ch'utillos 2018</p><br>
        <img src="potosi.png" width="150">
        <b style="font-size:20px;">PUNTOS DE RECICLAJE</b><br>
        <b>Punto 1</b> - Punto de Reciclaje plastico - Cancha Velarde <br>
        <b>Punto 2</b> - Punto de Reciclaje plastico - Antofagasta <br>
      </div>
    </div>


<script>
  var map;

  function area1(){
    var flightPlanCoordinates = [
  		new google.maps.LatLng(-19.591426173758478, -65.75744441200618),
  		new google.maps.LatLng(-19.59137768062563, -65.75766963785145),
  		new google.maps.LatLng(-19.59158818281215, -65.75838568579547),
  		new google.maps.LatLng(-19.59176662334153,-65.75889375919769),
  		new google.maps.LatLng(-19.592174690954067,-65.7595577635094),
  		new google.maps.LatLng(-19.592398323028856,-65.75985012429203),
  		new google.maps.LatLng(-19.592304372286907,-65.76188353429029),
  		new google.maps.LatLng(-19.59229607913169,-65.76193979638867),
  		new google.maps.LatLng(-19.592205110131825,-65.76196393626981),
  		new google.maps.LatLng(-19.59142407173549,-65.76120574723768),
  		new google.maps.LatLng(-19.590807499723255,-65.76089997540998),
  		new google.maps.LatLng(-19.590077844164593,-65.76071743055581),
  		new google.maps.LatLng(-19.58943652649897,-65.76071891533155),
  		new google.maps.LatLng(-19.589069880280018,-65.76086282947313),
  		new google.maps.LatLng(-19.588578239706706,-65.76096395399395),
  		new google.maps.LatLng(-19.588094787548695,-65.76089618720073),
  		new google.maps.LatLng(-19.58636950651413,-65.7597228681721),
  		new google.maps.LatLng(-19.58594315059838,-65.75965581294673),
  		new google.maps.LatLng(-19.585803851227226,-65.75975054481245),
  		new google.maps.LatLng(-19.585058295650015,-65.76041268301327),
  		new google.maps.LatLng(-19.58453739448953,-65.76082037878354),
  		new google.maps.LatLng(-19.584099508245007,-65.76098882004175),
  		new google.maps.LatLng(-19.58365532695217,-65.76110951944742),
  		new google.maps.LatLng(-19.582986377834583,-65.76114911357945),
  		new google.maps.LatLng(-19.58221332446309,-65.76094333227246),
  		new google.maps.LatLng(-19.58268104752631,-65.76037601686409),
  		new google.maps.LatLng(-19.578874989135677,-65.75765700142586),
  		new google.maps.LatLng(-19.580144290028546,-65.7546921636623),
  		new google.maps.LatLng(-19.58027278383687,-65.75435730679419),
  		new google.maps.LatLng(-19.580535133626434,-65.7538602254399),
  		new google.maps.LatLng(-19.58073887061729,-65.75337099618883),
  		new google.maps.LatLng(-19.582040535247167,-65.75447152051532),
  		new google.maps.LatLng(-19.583869916937932,-65.75581240428914),
  		new google.maps.LatLng(-19.584865499822047,-65.75661272736556),
  		new google.maps.LatLng(-19.58523930527849,-65.75675457715988),
	  ];
	  flightPath7 = new google.maps.Polyline( { path: flightPlanCoordinates, geodesic: true, strokeColor: '#fc1f01', strokeOpacity: 0.5, strokeWeight: 15, } );
    flightPath7.setMap(map);
  }


	/***********************************************************************/

	function bajada()
{
var flightPlanCoordinates =
	  [
		new google.maps.LatLng(-19.586452075041734,-65.7566805956289),
		new google.maps.LatLng(-19.58649263880044, -65.75798781168783),
		new google.maps.LatLng(-19.586301538696024, -65.75805422203473),
		new google.maps.LatLng(-19.585462569178652, -65.7580488576167),
		new google.maps.LatLng(-19.584954636714123, -65.75797375576428),
		new google.maps.LatLng(-19.584726601031974, -65.75910974458475),
		new google.maps.LatLng(-19.584998745467395, -65.75946522965495),
		new google.maps.LatLng(-19.585072663225986, -65.75950960884597),
		new google.maps.LatLng(-19.585482041455453, -65.75952704320457),
		new google.maps.LatLng(-19.58617586763335, -65.75923987817441),
		new google.maps.LatLng(-19.586267158431458, -65.75930426186943),
		new google.maps.LatLng(-19.586303800080632, -65.7594423956337),
		new google.maps.LatLng(-19.58626842193674, -65.75957784718895),
		new google.maps.LatLng(-19.585933366118397, -65.75989479023298),
		new google.maps.LatLng(-19.585035215827936, -65.76053951818926),
		new google.maps.LatLng(-19.584561052944682, -65.7608921518447),
		new google.maps.LatLng(-19.584542100163464, -65.76137360836287),
		new google.maps.LatLng(-19.584112484574987, -65.76137067990572),
		new google.maps.LatLng(-19.584105766918896, -65.76174106845258),
		new google.maps.LatLng(-19.582592280031665, -65.7616783027359),
		new google.maps.LatLng(-19.581649741315807, -65.76276193593077),
	  ];
	  flightPath = new google.maps.Polyline(
	  {
		path: flightPlanCoordinates,
		geodesic: true,
		strokeColor: '#019f14',
		strokeOpacity: 0.5,
		strokeWeight: 15,
	  });

  flightPath.setMap(map);
}
	/***********************************************************************/


	function subida()
{
var flightPlanCoordinates =
	  [
		new google.maps.LatLng(-19.58525665710824,-65.7671845689523),
		new google.maps.LatLng(-19.58606530353634, -65.76705045850156),
		new google.maps.LatLng(-19.585759937834727, -65.76487325560697),
		new google.maps.LatLng(-19.585790262054296, -65.76465331446775),
		new google.maps.LatLng(-19.586103212377036, -65.76362647000667),
		new google.maps.LatLng(-19.58662502615896, -65.7623997487375),
		new google.maps.LatLng(-19.5867101433845, -65.76226817591208),
		new google.maps.LatLng(-19.58685149720359, -65.76201775998044),
		new google.maps.LatLng(-19.588236036190704, -65.76136288364143),
		new google.maps.LatLng(-19.588286607094858, -65.76127437074393),
		new google.maps.LatLng(-19.58832198479533, -65.760925683572),
		new google.maps.LatLng(-19.58791802702557, -65.76010805715543),
		new google.maps.LatLng(-19.588727002662868, -65.76023962298802),
		new google.maps.LatLng(-19.58866621475194, -65.7596111914807),
		new google.maps.LatLng(-19.588684421058193, -65.75948359048908),
		new google.maps.LatLng(-19.58887214237437, -65.75904485038751),
		new google.maps.LatLng(-19.588998106883174, -65.75880319211694),
		new google.maps.LatLng(-19.589129167988418, -65.75811574868692),
		new google.maps.LatLng(-19.58916936186962, -65.7578867553475),
		new google.maps.LatLng(-19.589365754073242, -65.75759665844237),
		new google.maps.LatLng(-19.589646819179368, -65.75697094405132),
		new google.maps.LatLng(-19.589770531088163, -65.7564181708193),
		new google.maps.LatLng(-19.589739862796016, -65.75532618932647),
		new google.maps.LatLng(-19.589631041073766, -65.75391120187595),
	  ];
	  flightPath = new google.maps.Polyline(
	  {
		path: flightPlanCoordinates,
		geodesic: true,
		strokeColor: '#014cb2',
		strokeOpacity: 0.5,
		strokeWeight: 15,
	  });

  flightPath.setMap(map);
}
	/***********************************************************************/

	var modal = document.getElementById('salud');
	var span = document.getElementsByClassName("close")[0];
  var modal0 = document.getElementById('salud0');
  var span0  = document.getElementsByClassName("close")[0];
  var modal1 = document.getElementById('salud1');
	var span1  = document.getElementsByClassName("close")[0];
  var modal2 = document.getElementById('salud2');
	var span2  = document.getElementsByClassName("close")[0];
  var modal3 = document.getElementById('salud3');
	var span3  = document.getElementsByClassName("close")[0];
  var modal4 = document.getElementById('salud4');
	var span4  = document.getElementsByClassName("close")[0];

  var modal5 = document.getElementById('ropa');
	var span5  = document.getElementsByClassName("close")[0];
  var modal6 = document.getElementById('transito');
	var span6  = document.getElementsByClassName("close")[0];
  var modal7 = document.getElementById('verduras');
	var span7  = document.getElementsByClassName("close")[0];
  var modal8 = document.getElementById('abarrotes');
	var span8  = document.getElementsByClassName("close")[0];

  var modal9 = document.getElementById('comida');
	var span9  = document.getElementsByClassName("close")[0];

  var modal10 = document.getElementById('basudero');
	var span10  = document.getElementsByClassName("close")[0];

	window.onclick = function(event) {
      if (event.target == modal)  modal.style.display = "none";
      if (event.target == modal0) modal0.style.display = "none";
      if (event.target == modal1) modal1.style.display = "none";
      if (event.target == modal2) modal2.style.display = "none";
      if (event.target == modal3) modal3.style.display = "none";
      if (event.target == modal4) modal4.style.display = "none";
      if (event.target == modal5) modal5.style.display = "none";
      if (event.target == modal6) modal6.style.display = "none";
      if (event.target == modal7) modal7.style.display = "none";
      if (event.target == modal8) modal8.style.display = "none";
      if (event.target == modal9) modal9.style.display = "none";
      if (event.target == modal10) modal10.style.display = "none";
	}
  span.onclick = function() { modal.style.display = "none"; }
  span0.onclick = function() { modal0.style.display = "none"; }
  span1.onclick = function() { modal2.style.display = "none"; }
  span2.onclick = function() { modal2.style.display = "none"; }
  span3.onclick = function() { modal3.style.display = "none"; }
  span4.onclick = function() { modal4.style.display = "none"; }
  span5.onclick = function() { modal5.style.display = "none"; }
  span6.onclick = function() { modal6.style.display = "none"; }
  span7.onclick = function() { modal7.style.display = "none"; }
  span8.onclick = function() { modal8.style.display = "none"; }
  span9.onclick = function() { modal9.style.display = "none"; }
  span10.onclick = function() { modal10.style.display = "none"; }

   function initMap() {
    var uluru = {lat: -19.5844895, lng: -65.7527863};
    map = new google.maps.Map(document.getElementById('map'), { zoom: 15, center: uluru });

    area1();
    bajada();
	subida();

    //////////////////////////////////////////////
    var image = new google.maps.MarkerImage( 'salud.png', new google.maps.Size(130,130));
    var place = new google.maps.LatLng(-19.582637633003724,-65.76039221554072);
    var marker = new google.maps.Marker({ position: place , map: map , title: 'PUNTO DE SALUD ANTOFAGASTA' , icon: image , animation: google.maps.Animation.DROP,});
    function showInfo() {
    	var modal = document.getElementById('salud1');
    	modal.style.display = 'block';
    }
    google.maps.event.addListener(marker, 'click', showInfo);

    //////////////////////////////////////////////
    var image1 = new google.maps.MarkerImage( 'salud.png', new google.maps.Size(130,130));
    var place1 = new google.maps.LatLng(-19.5922985343058,-65.7619542008077);
    var marker1 = new google.maps.Marker({ position: place1, map: map, title: 'PUNTO DE SALUD H. VASQUEZ', icon: image1, animation: google.maps.Animation.DROP,});
    function showInfo1() {
    	var modal1 = document.getElementById('salud1');
    	modal1.style.display = 'block';
    }
	  google.maps.event.addListener(marker1, 'click', showInfo1);

    //////////////////////////////////////////////
    var image2 = new google.maps.MarkerImage( 'salud.png', new google.maps.Size(130,130));
    var place2 = new google.maps.LatLng(-19.583026881879988,-65.76111784844511);
    var marker2 = new google.maps.Marker({ position: place2, map: map, title: 'PUNTO DE SALUD ILUSTRES', icon: image2, animation: google.maps.Animation.DROP,});
    function showInfo2() {
    	var modal2 = document.getElementById('salud2');
    	modal2.style.display = 'block';
    }
	  google.maps.event.addListener(marker2, 'click', showInfo2);

    //////////////////////////////////////////////
    var image3 = new google.maps.MarkerImage( 'salud.png', new google.maps.Size(130,130));
    var place3 = new google.maps.LatLng(-19.5883242730864,-65.7609786148839);
    var marker3 = new google.maps.Marker({ position: place3, map: map, title: 'PUNTO DE SALUD TINKUY', icon: image3, animation: google.maps.Animation.DROP,});
    function showInfo3() {
    	var modal3 = document.getElementById('salud3');
    	modal3.style.display = 'block';
    }
	  google.maps.event.addListener(marker3, 'click', showInfo3);

    //////////////////////////////////////////////
    var image0 = new google.maps.MarkerImage( 'salud.png', new google.maps.Size(130,130));
    var place0 = new google.maps.LatLng(-19.5809909, -65.7591771);
    var marker0 = new google.maps.Marker({position: place0, map: map, title: 'PUNTO DE SALUD SEVILLA', icon: image0, animation: google.maps.Animation.DROP,});
    function showInfo0() {
    	var modal0 = document.getElementById('salud0');
    	modal0.style.display = 'block';
    }
	  google.maps.event.addListener(marker0, 'click', showInfo0);


    //////////*SLIM*//////////////////////////////////////
    var image4 = new google.maps.MarkerImage( 'slim.png', new google.maps.Size(130,130));
    var place4 = new google.maps.LatLng(-19.5795644545261,-65.7561063955318);
    var marker4 = new google.maps.Marker({ position: place4, map: map, title: 'PUNTO SLIM Y DEFENSORÍAS MUNICIPALES DE LA NIÑEZ Y ADOLECENCOA POTOSÍ', icon: image4, animation: google.maps.Animation.DROP,});
    function showInfo4() {
    	var modal4 = document.getElementById('salud4');
    	modal4.style.display = 'block';
    }
	  google.maps.event.addListener(marker4, 'click', showInfo4);



    //////////////////ROPA
    var image5  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place5  = new google.maps.LatLng(-19.58479553526764, -65.75791154314493);
    var marker5 = new google.maps.Marker({ position: place5, map: map , title: 'COMERCIO DE ROPA' , icon: image5 , animation: google.maps.Animation.DROP,});

    var image6  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place6  = new google.maps.LatLng(-19.584324745743142, -65.7584266009606);
    var marker6 = new google.maps.Marker({ position: place6, map: map , title: 'COMERCIO DE ROPA' , icon: image6 , animation: google.maps.Animation.DROP,});

    var image7  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place7  = new google.maps.LatLng(-19.583988648931978, -65.75877528813254);
    var marker7 = new google.maps.Marker({ position: place7, map: map , title: 'COMERCIO DE ROPA' , icon: image7 , animation: google.maps.Animation.DROP,});
    //////////////////ROPA
    var image9  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place9  = new google.maps.LatLng(-19.583783958049175, -65.75898718264472);
    var marker9 = new google.maps.Marker({ position: place9, map: map , title: 'COMERCIO DE ROPA' , icon: image9 , animation: google.maps.Animation.DROP,});

    var image10  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place10  = new google.maps.LatLng(-19.583609591536405, -65.75922053482901);
    var marker10 = new google.maps.Marker({ position: place10, map: map , title: 'COMERCIO DE ROPA' , icon: image10 , animation: google.maps.Animation.DROP,});

    var image11  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place11  = new google.maps.LatLng(-19.58338721078242, -65.75949143793952);
    var marker11 = new google.maps.Marker({ position: place11, map: map , title: 'COMERCIO DE ROPA' , icon: image11 , animation: google.maps.Animation.DROP,});

    //////////////////ROPA
    var image21  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place21  = new google.maps.LatLng(-19.580818336819895, -65.7624033511882);
    var marker21 = new google.maps.Marker({ position: place21, map: map , title: 'COMERCIO DE ROPA' , icon: image21 , animation: google.maps.Animation.DROP,});

    var image22  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place22  = new google.maps.LatLng(-19.58054541021285, -65.76274130952407);
    var marker22 = new google.maps.Marker({ position: place22, map: map , title: 'COMERCIO DE ROPA' , icon: image22 , animation: google.maps.Animation.DROP,});

    var image23  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place23  = new google.maps.LatLng(-19.580226995253504, -65.76313291204025);
    var marker23 = new google.maps.Marker({ position: place23, map: map , title: 'COMERCIO DE ROPA' , icon: image23 , animation: google.maps.Animation.DROP,});

    var image24  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place24  = new google.maps.LatLng(-19.579999555611455, -65.76340649735977);
    var marker24 = new google.maps.Marker({ position: place24, map: map , title: 'COMERCIO DE ROPA' , icon: image24 , animation: google.maps.Animation.DROP,});

    var image25  = new google.maps.MarkerImage( 'ropa130.png', new google.maps.Size(130,130));
    var place25  = new google.maps.LatLng(-19.57973673606959, -65.76366935384323);
    var marker25 = new google.maps.Marker({ position: place25, map: map , title: 'COMERCIO DE ROPA' , icon: image25 , animation: google.maps.Animation.DROP,});

    function showInfoRopa() {
    	var modal5 = document.getElementById('ropa'); modal5.style.display = 'block';
    }
    google.maps.event.addListener(marker5, 'click', showInfoRopa);
    google.maps.event.addListener(marker6, 'click', showInfoRopa);
    google.maps.event.addListener(marker7, 'click', showInfoRopa);
    google.maps.event.addListener(marker9, 'click', showInfoRopa);
    google.maps.event.addListener(marker10, 'click', showInfoRopa);
    google.maps.event.addListener(marker11, 'click', showInfoRopa);
    google.maps.event.addListener(marker21, 'click', showInfoRopa);
    google.maps.event.addListener(marker22, 'click', showInfoRopa);
    google.maps.event.addListener(marker23, 'click', showInfoRopa);
    google.maps.event.addListener(marker24, 'click', showInfoRopa);
    google.maps.event.addListener(marker25, 'click', showInfoRopa);


    //////////////////TRANSITO
    var image8  = new google.maps.MarkerImage( 'semaforo130.png', new google.maps.Size(130,130));
    var place8  = new google.maps.LatLng(-19.583988648931978, -65.75877528813254);
    var marker8 = new google.maps.Marker({ position: place8, map: map , title: 'TRANSITO HABILITADO PARA MOVILIDADES' , icon: image8 , animation: google.maps.Animation.DROP,});

    //////////////////TRANSITO
    var image20  = new google.maps.MarkerImage( 'semaforo130.png', new google.maps.Size(130,130));
    var place20  = new google.maps.LatLng(-19.581025558564534, -65.7622424186473);
    var marker20 = new google.maps.Marker({ position: place20, map: map , title: 'TRANSITO HABILITADO PARA MOVILIDADES' , icon: image20 , animation: google.maps.Animation.DROP,});

    function showInfoTransito() {
    	var modal6 = document.getElementById('transito'); modal6.style.display = 'block';
    }
    google.maps.event.addListener(marker8, 'click', showInfoTransito);
    google.maps.event.addListener(marker20, 'click', showInfoTransito);



    //////////////////BASUDERO
    var image40  = new google.maps.MarkerImage('basudero.png', new google.maps.Size(130,130));
    var place40  = new google.maps.LatLng(-19.5889937, -65.7609516);
    var marker40 = new google.maps.Marker({ position: place40, map: map , title: 'PUNTO DE RECICLAJE' , icon: image40, animation: google.maps.Animation.DROP,});

    var image41  = new google.maps.MarkerImage('basudero.png', new google.maps.Size(130,130));
    var place41  = new google.maps.LatLng(-19.5853339, -65.7599974);
    var marker41 = new google.maps.Marker({ position: place41, map: map , title: 'PUNTO DE RECICLAJE' , icon: image41 , animation: google.maps.Animation.DROP,});

/*
    function showInfoBasudero() {
    	var modal10 = document.getElementById('basudero'); modal10.style.display = 'block';
    }
    google.maps.event.addListener(marker40, 'click', showInfoBasudero);
    google.maps.event.addListener(marker41, 'click', showInfoBasudero);
*/



    /////////////////COMIDA
    var image12  = new google.maps.MarkerImage( 'comida130.png', new google.maps.Size(130,130));
    var place12  = new google.maps.LatLng(-19.583276020290292, -65.75961750176322);
    var marker12 = new google.maps.Marker({ position: place12, map: map , title: 'COMIDAS' , icon: image12 , animation: google.maps.Animation.DROP,});

    var image13  = new google.maps.MarkerImage( 'comida130.png', new google.maps.Size(130,130));
    var place13  = new google.maps.LatLng(-19.58310670734799, -65.75984548952948);
    var marker13 = new google.maps.Marker({ position: place13, map: map , title: 'COMIDAS' , icon: image13 , animation: google.maps.Animation.DROP,});

    var image14  = new google.maps.MarkerImage( 'comida130.png', new google.maps.Size(130,130));
    var place14  = new google.maps.LatLng(-19.582919704786967, -65.76000910427939);
    var marker14 = new google.maps.Marker({ position: place14, map: map , title: 'COMIDAS' , icon: image14 , animation: google.maps.Animation.DROP,});

    var image15  = new google.maps.MarkerImage( 'comida130.png', new google.maps.Size(130,130));
    var place15  = new google.maps.LatLng(-19.58279335158227, -65.76028537180792);
    var marker15 = new google.maps.Marker({ position: place15, map: map , title: 'COMIDAS' , icon: image15, animation: google.maps.Animation.DROP,});


    var image16  = new google.maps.MarkerImage( 'comida130.png', new google.maps.Size(130,130));
    var place16  = new google.maps.LatLng(-19.581863388946157, -65.76135289099585);
    var marker16 = new google.maps.Marker({ position: place16, map: map , title: 'COMIDAS' , icon: image16 , animation: google.maps.Animation.DROP,});

    var image17  = new google.maps.MarkerImage( 'comida130.png', new google.maps.Size(130,130));
    var place17  = new google.maps.LatLng(-19.581668803693532, -65.76155673888098);
    var marker17 = new google.maps.Marker({ position: place17, map: map , title: 'COMIDAS' , icon: image17 , animation: google.maps.Animation.DROP,});

    var image18  = new google.maps.MarkerImage( 'comida130.png', new google.maps.Size(130,130));
    var place18  = new google.maps.LatLng(-19.581318701065047, -65.76187227380325);
    var marker18 = new google.maps.Marker({ position: place18, map: map , title: 'COMIDAS' , icon: image18 , animation: google.maps.Animation.DROP,});

    var image19  = new google.maps.MarkerImage( 'comida130.png', new google.maps.Size(130,130));
    var place19  = new google.maps.LatLng(-19.581101371331343, -65.7620975793605);
    var marker19 = new google.maps.Marker({ position: place19, map: map , title: 'COMIDAS' , icon: image19, animation: google.maps.Animation.DROP,});

    function showInfoComida() {
    	var modal9 = document.getElementById('comida'); modal9.style.display = 'block';
    }
    google.maps.event.addListener(marker12, 'click', showInfoComida);
    google.maps.event.addListener(marker13, 'click', showInfoComida);
    google.maps.event.addListener(marker14, 'click', showInfoComida);
    google.maps.event.addListener(marker15, 'click', showInfoComida);
    google.maps.event.addListener(marker16, 'click', showInfoComida);
    google.maps.event.addListener(marker17, 'click', showInfoComida);
    google.maps.event.addListener(marker18, 'click', showInfoComida);
    google.maps.event.addListener(marker19, 'click', showInfoComida);


    //////////////////ABARROTES
    var image26  = new google.maps.MarkerImage( 'abarrotes130.png', new google.maps.Size(130,130));
    var place26  = new google.maps.LatLng(-19.5816927096877, -65.76108370435287);
    var marker26 = new google.maps.Marker({ position: place26, map: map , title: 'COMERCIO DE ABARROTES' , icon: image26 , animation: google.maps.Animation.DROP,});

    var image27  = new google.maps.MarkerImage( 'abarrotes130.png', new google.maps.Size(130,130));
    var place27  = new google.maps.LatLng(-19.581306065623448, -65.7608181656604);
    var marker27 = new google.maps.Marker({ position: place27, map: map , title: 'COMERCIO DE ABARROTES' , icon: image27 , animation: google.maps.Animation.DROP,});

    var image28  = new google.maps.MarkerImage( 'abarrotes130.png', new google.maps.Size(130,130));
    var place28  = new google.maps.LatLng(-19.5810356669355, -65.76060895335723);
    var marker28 = new google.maps.Marker({ position: place28, map: map , title: 'COMERCIO DE ABARROTES' , icon: image28 , animation: google.maps.Animation.DROP,});

    var image29  = new google.maps.MarkerImage( 'abarrotes130.png', new google.maps.Size(130,130));
    var place29  = new google.maps.LatLng(-19.58071148581127, -65.76037095387409);
    var marker29 = new google.maps.Marker({ position: place29, map: map , title: 'COMERCIO DE ABARROTES' , icon: image29 , animation: google.maps.Animation.DROP,});

    var image30  = new google.maps.MarkerImage( 'abarrotes130.png', new google.maps.Size(130,130));
    var place30  = new google.maps.LatLng(-19.580420869308007, -65.76012419064472);
    var marker30 = new google.maps.Marker({ position: place30, map: map , title: 'COMERCIO DE ABARROTES' , icon: image30 , animation: google.maps.Animation.DROP,});

    var image31  = new google.maps.MarkerImage( 'abarrotes130.png', new google.maps.Size(130,130));
    var place31  = new google.maps.LatLng(-19.580067074596336, -65.75988010962436);
    var marker31 = new google.maps.Marker({ position: place31, map: map , title: 'COMERCIO DE ABARROTES' , icon: image31 , animation: google.maps.Animation.DROP,});

    var image32  = new google.maps.MarkerImage( 'abarrotes130.png', new google.maps.Size(130,130));
    var place32  = new google.maps.LatLng(-19.57977140270551, -65.75967357953022);
    var marker32 = new google.maps.Marker({ position: place32, map: map , title: 'COMERCIO DE ABARROTES' , icon: image32 , animation: google.maps.Animation.DROP,});

    var image33  = new google.maps.MarkerImage( 'abarrotes130.png', new google.maps.Size(130,130));
    var place33  = new google.maps.LatLng(-19.579303886215108, -65.75930075247715);
    var marker33 = new google.maps.Marker({ position: place33, map: map , title: 'COMERCIO DE ABARROTES' , icon: image33 , animation: google.maps.Animation.DROP,});

    var image34  = new google.maps.MarkerImage( 'abarrotes130.png', new google.maps.Size(130,130));
    var place34  = new google.maps.LatLng(-19.578634198067753, -65.75883673031757);
    var marker34 = new google.maps.Marker({ position: place34, map: map , title: 'COMERCIO DE ABARROTES' , icon: image34 , animation: google.maps.Animation.DROP,});

    function showInfoAbarrotes() {
    	var modal8 = document.getElementById('abarrotes'); modal8.style.display = 'block';
    }
    google.maps.event.addListener(marker26, 'click', showInfoAbarrotes);
    google.maps.event.addListener(marker27, 'click', showInfoAbarrotes);
    google.maps.event.addListener(marker28, 'click', showInfoAbarrotes);
    google.maps.event.addListener(marker29, 'click', showInfoAbarrotes);
    google.maps.event.addListener(marker30, 'click', showInfoAbarrotes);
    google.maps.event.addListener(marker31, 'click', showInfoAbarrotes);
    google.maps.event.addListener(marker32, 'click', showInfoAbarrotes);
    google.maps.event.addListener(marker33, 'click', showInfoAbarrotes);
    google.maps.event.addListener(marker34, 'click', showInfoAbarrotes);


    //////////////////VERDURAS
    var image35  = new google.maps.MarkerImage( 'verduras.png', new google.maps.Size(130,130));
    var place35  = new google.maps.LatLng(-19.57802768564511, -65.75841294129322);
    var marker35 = new google.maps.Marker({ position: place35, map: map , title: 'COMERCIO DE VERDURAS' , icon: image35 , animation: google.maps.Animation.DROP,});

    var image36  = new google.maps.MarkerImage( 'verduras.png', new google.maps.Size(130,130));
    var place36  = new google.maps.LatLng(-19.577547528357776, -65.75808302958438);
    var marker36 = new google.maps.Marker({ position: place36, map: map , title: 'COMERCIO DE VERDURAS' , icon: image36 , animation: google.maps.Animation.DROP,});

    var image37  = new google.maps.MarkerImage( 'verduras.png', new google.maps.Size(130,130));
    var place37  = new google.maps.LatLng(-19.57718144474462, -65.7578125013174);
    var marker37 = new google.maps.Marker({ position: place37, map: map , title: 'COMERCIO DE VERDURAS' , icon: image37 , animation: google.maps.Animation.DROP,});

    var image38  = new google.maps.MarkerImage( 'verduras.png', new google.maps.Size(130,130));
    var place38  = new google.maps.LatLng(-19.576921147762366, -65.75761670005932);
    var marker38 = new google.maps.Marker({ position: place38, map: map , title: 'COMERCIO DE VERDURAS' , icon: image38 , animation: google.maps.Animation.DROP,});

    var image39  = new google.maps.MarkerImage( 'verduras.png', new google.maps.Size(130,130));
    var place39  = new google.maps.LatLng(-19.576544600898202, -65.75737798345699);
    var marker39 = new google.maps.Marker({ position: place39, map: map , title: 'COMERCIO DE VERDURAS' , icon: image39 , animation: google.maps.Animation.DROP,});

    function showInfoVerduras() {
    	var modal7 = document.getElementById('verduras'); modal7.style.display = 'block';
    }
    google.maps.event.addListener(marker35, 'click', showInfoVerduras);
    google.maps.event.addListener(marker36, 'click', showInfoVerduras);
    google.maps.event.addListener(marker37, 'click', showInfoVerduras);
    google.maps.event.addListener(marker38, 'click', showInfoVerduras);
    google.maps.event.addListener(marker39, 'click', showInfoVerduras);

  }
</script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3_Dqo-80xQtQXcth-uFD9Y71170wyi-4&callback=initMap">
    </script>
  </body>
</html>
