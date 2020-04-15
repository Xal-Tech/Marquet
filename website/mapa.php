<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/mapa.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <?php include 'header.php'; ?>

    <h1>
        Busca un negocio cercano a ti
    </h1>
    
	<div id="map" align="middle">
	    <script>
			var map;
			function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 19.54, lng: -96.9275},
			zoom: 14
			});
		}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATk-dV4WFw91F9v9176KdZEWvnGF-EK7M&callback=initMap"
		async defer></script>
	</div>
	
</body>
</html>
