<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>MAPS</title>

	<style>
		#map-canvas{
			width: 500px;
			height: 500px;
		}
	</style>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfUutw5kI2URradTkzL1C409sqildXJNc&libraries=places" type="text/javascript"></script>
</head>
<body>
	
	<div id="map-canvas"></div>
	<button id="get">Get Direction</button>
	<script>
		var directionsDisplay = new google.maps.DirectionsRenderer();
		var directionsService = new google.maps.DirectionsService();

		var map;
		var semarang = new google.maps.LatLng(-6.993, 110.421);
		var pemalang = new google.maps.LatLng(-6.89056, 109.381);

		var mapOptions = {
			zoom:14,
			center: semarang
		};

		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		directionsDisplay.setMap(map);

		function calculateRoute(){

			var request = {
				origin : semarang,
				destination : pemalang,
				travelMode : 'DRIVING'
			};
			directionsService.route(request, function(result, status){
				
				if(status=="OK"){

					//render direction
					directionsDisplay.setDirections(result);
				}

			});
		}

		//button click
		document.getElementById('get').onclick=function(){
			calculateRoute();
		};
	</script>
</body>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>MAPS</title>

	<style>
		#map-canvas{
			width: 500px;
			height: 500px;
		}
	</style>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfUutw5kI2URradTkzL1C409sqildXJNc&libraries=places" type="text/javascript"></script>
</head>
<body>
	
	<div id="map-canvas"></div>
	<button id="get">Get Direction</button>
	<script>
		var directionsDisplay = new google.maps.DirectionsRenderer();
		var directionsService = new google.maps.DirectionsService();

		var map;
		var semarang = new google.maps.LatLng(-6.993843, 110.421791);
		var pemalang = new google.maps.LatLng(-6.900751, 109.387621);
		var bawen = new google.maps.LatLng(-7.218854, 110.429932);
		var demak = new google.maps.LatLng(-6.893788, 110.638337);

		var mapOptions = {
			zoom:14,
			center: semarang
		};

		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		directionsDisplay.setMap(map);

		function calculateRoute(){

			var request = {
				origin : semarang,
				destination : demak,
				travelMode : 'DRIVING'
			};
			directionsService.route(request, function(result, status){
				
				if(status=="OK"){

					//render direction
					directionsDisplay.setDirections(result);
				}

			});
		}

		//button click
		document.getElementById('get').onclick=function(){
			calculateRoute();
		};
	</script>
</body>
