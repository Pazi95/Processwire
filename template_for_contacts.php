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

	<body class="contactus">

		<div class="off-canvas-wrapper">

			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

				<div class="off-canvas position-left" id="mobile-menu" data-off-canvas>

					<ul class="vertical menu">

						<li><a href="<?php echo $pages->get(1)->url; ?>">Home</a></li>
						<li><a href="<?php echo $pages->get(1015)->url; ?>">What We Do</a></li>			
						<li><a href="<?php echo $pages->get(1016)->url;?>">About Us</a></li>
						<li><a href="<?php echo $pages->get(1017)->url;?>">Contact Us</a></li>

					</ul>

				</div>


		 
				<!-- Mobile Navigation -->
				<div class="off-canvas-content" data-off-canvas-content>

					<div class="title-bar hide-for-large">

						<div class="title-bar-left">

							<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
							<span class="title-bar-title">MENU</span>

						</div>

						<div class="title-bar-right">

							<h3 class="top-bar-right__logo">Caraher & Ward Ltd.</h3>

						</div>

					</div>

				<!-- Desktop Navigation -->
				<nav class="top-bar nav-desktop">

					<div class="wrap">

						<div class="top-bar-left">

							<h3 class="top-bar-left__logo">Caraher & Ward Ltd.</h3>

						</div>

						<div class="top-bar-right">

							<ul class="menu top-bar-right-menu">

								<li><a href="<?php echo $pages->get(1)->url;?>" class="top-bar-right-menu__itemlink">Home</a></li>
								<li><a href="<?php echo $pages->get(1015)->url;?>" class="top-bar-right-menu__itemlink">What We Do</a></li>
								<li><a href="<?php echo $pages->get(1016)->url;?>" class="top-bar-right-menu__itemlink">About Us</a></li>
								<li><a href="<?php echo $pages->get(1017)->url;?>" class="top-bar-right-menu__itemlink contactus">Contact Us</a></li>

							</ul>

						</div>

					</div>

				</nav>

				<!-- Main Section -->
				<section class="main-contacts">

					<div class="wrap row">
						
						<div class="contactinfo small-12 large-6 column">

							<h2>Contact Information</h2>

							<ul>
								
								<li><a class="contactbold" href="#"><i class="fi-telephone"></i>Phone Number</a></li>
								<li><a href="tel:042-9339089"><span style="font-weight: normal;" data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="3" title="Click Me To Call">042-9339089</span></a></li>

								<li><a class="contactbold" href="#"><i class="fi-mail"></i>Email Address</a></li>
								<li><a href="mailto:caraherward@eircom.net"><span style="font-weight: normal;" data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="3" title="Click Me To Send Email">caraherward@eircom.net</span></a></li>

								<li><a class="contactbold" href="#"><i class="fi-home"></i>Address</a></li>
								<li><a href="https://goo.gl/maps/CRwkAzziyLC2"><span style="font-weight: normal;" data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="3" title="Click Me To Open Location On Google Maps">CRV Buildings, Ardee Road, Dundalk, Co.Louth</span></a></li>

								<li><a class="contactbold" href="#"><i class="fi-info"></i>Eircode</a></li>
								<li><a href="#"><span>A91 TFR3</span></a></li>

								<li><a class="contactbold"><i class="fi-map"></i>GPS Coordinates</a></li>
								<li><a><span>Long.:53.9952184, Lat.:-6.413037400000007</span></a></li>

								<li><a class="contactbold"><i class="fi-print"></i>Fax</a></li>
								<li><a><span>042-9336784</span></a></li>

							</ul>

						</div>

						<div class="maps small-12 large-6 column">

							<div id="googleMap"></div>

						</div>

					</div>

				</section>
				<!-- Footer -->
				<footer>

					<div class="wrap row small-up-1 medium-up-2">

						<div class="column">

							<h4>Contact Info</h4>
							<hr>
							<li><a href="tel:042-9339089"><span>Phone</span> 042-9339089</a></li>
							<li><a href="mailto:caraherward@eircom.net"><span>Email</span> caraherward@eircom.net</a></li>
							<li><a href="https://goo.gl/maps/CRwkAzziyLC2"><span>Address</span> CRV Buildings, Ardee Road, Dundalk, Co.Louth</a></li>

						</div>

						<div class="column">

							<h4>Site Map</h4>
							<hr>
							<li><a href="<?php echo $pages->get(1)->url;?>">Home</a></li>
							<li><a href="<?php echo $pages->get(1015)->url;?>">What We Do</a></li>
							<li><a href="<?php echo $pages->get(1016)->url;?>">About Us</a></li>
							<li><a href="<?php echo $pages->get(1017)->url;?>">Contact Us</a></li>

						</div>

					</div>

				</footer>

				</div>

			</div>

		</div>

		<script src="<?php echo $config->urls->templates; ?>js/vendor/jquery.js"></script>
		<script src="<?php echo $config->urls->templates; ?>js/vendor/what-input.js"></script>
		<script src="<?php echo $config->urls->templates; ?>js/vendor/foundation.js"></script>
		<script src="<?php echo $config->urls->templates; ?>js/app.js"></script>
	
	</body>

</html>