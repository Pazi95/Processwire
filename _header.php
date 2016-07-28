<!doctype html>

<html class="no-js" lang="en" dir="ltr">

	<head>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $page->title; ?></title>

	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/foundation.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/app.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>foundation-icons/foundation-icons.css">

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfleDtpQf4QFVnZ6pcuW8yDFvKFbIqfrE&callback=initMap"></script>

	<script>

	var myCenter=new google.maps.LatLng(53.995216,-6.413037000000031);
	function initialize(){

		var mapProp={
			center:myCenter,
			zoom: 12,    
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};   

		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		var marker=new google.maps.Marker({position:myCenter});
		marker.setMap(map);
		var infowindow = new google.maps.InfoWindow({content:"Find Us Here!"});

		infowindow.open(map,marker);

	}

	google.maps.event.addDomListener(window, 'load', initialize);

	</script>

	</head>