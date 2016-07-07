<!doctype html>

<html class="no-js" lang="en" dir="ltr">

	<head>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $page->title; ?></title>
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/foundation.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/app.css">
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

	<body>

		<div class="off-canvas-wrapper">

			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

				<div class="off-canvas position-left" id="mobile-menu" data-off-canvas>

					<ul class="vertical menu" data-accordion-menu>

						<li><a href="<?php echo $pages->get(1)->url; ?>">Home</a></li>
						<li><a href="<?php echo $pages->get(1015)->url; ?>">What We Do</a>

							<ul class="menu vertical nested">
													
								<li><a href="<?php echo $pages->get(1019)->url; ?>">Vehicle Maintenance & Repairs</a>

									<ul class="menu vertical nested">

										<li><a href="<?php echo $pages->get(1024)->url; ?>">HGV-Vehicle Maintenance</a></li>
										<li><a href="<?php echo $pages->get(1025)->url; ?>">LGV-Vehicle Maintenance</a></li>
										<li><a href="<?php echo $pages->get(1026)->url;?>">Bus Maintenance and Repairs</a></li>
										<li><a href="<?php echo $pages->get(1027)->url;?>">Fleet Management</a></li>

									</ul>

								</li>
								<li><a href="<?php echo $pages->get(1020)->url;?>">General Engineering</a></li>
								<li><a href="<?php echo $pages->get(1021)->url;?>">Chassis Repairs</a></li>
								<li><a href="<?php echo $pages->get(1022)->url;?>">Welding and Fabrication Work</a>

									<ul class="menu vertical nested">

										<li><a href="<?php echo $pages->get(1028)->url;?>">Steel Fabrication</a></li>
										<li><a href="<?php echo $pages->get(1029)->url;?>">Lifting Equipment</a></li>

									</ul>

								</li>
								<li><a href="<?php echo $pages->get(1023)->url;?>">Machine Installation</a></li>

							</ul>

						</li>			
						<li><a href="<?php echo $pages->get(1016)->url;?>">About Us</a>

							<ul class="menu vertical nested">

								<li><a href="<?php echo $pages->get(1030)->url;?>">History</a></li>
								<li><a href="<?php echo $pages->get(1031)->url;?>">Team</a></li>

							</ul>

						</li>
						<li><a href="<?php echo $pages->get(1017)->url;?>">Contact Us</a></li>

					</ul>

				</div>


		 
				<!-- Mobile Navigation -->
				<div class="off-canvas-content" data-off-canvas-content>

					<div class="title-bar show-for-small-only">

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

							<ul class="dropdown menu top-bar-right-menu" data-dropdown-menu>

								<li><a href="<?php echo $pages->get(1)->url;?>" class="top-bar-right-menu__itemlink">Home</a></li>
								<li><a href="<?php echo $pages->get(1015)->url;?>" class="top-bar-right-menu__itemlink--dropdown">What We Do</a>

									<ul class="vertical menu" data-accordion-menu>

										<li class="top-bar-right-menu__itemlink--dropdown--accordionlink"><a href="<?php echo $pages->get(1019)->url;?>">Vehicle Maintenance & Repairs</a>
																		
											<ul class="menu vertical nested">
																				
												<li><a href="<?php echo $pages->get(1024)->url;?>">HGV-Vehicle Maintenance</a></li>
												<li><a href="<?php echo $pages->get(1025)->url;?>">LGV-Vehicle Maintenance</a></li>
												<li><a href="<?php echo $pages->get(1026)->url;?>">Bus Maintenance and Repairs</a></li>
												<li><a href="<?php echo $pages->get(1027)->url;?>">Fleet Management</a></li>

											</ul>

										</li>

										<li><a href="<?php echo $pages->get(1020)->url;?>">General Engineering</a></li>
										<li><a href="<?php echo $pages->get(1021)->url;?>">Chassis Repairs</a></li>
										<li class="top-bar-right-menu__itemlink--dropdown--accordionlink"><a href="<?php echo $pages->get(1022)->url;?>">Welding and Fabrication Work</a>

											<ul class="menu vertical nested">

												<li><a href="<?php echo $pages->get(1028)->url;?>">Steel Fabrication</a></li>
												<li><a href="<?php echo $pages->get(1029)->url;?>">Lifting Equipment</a></li>

											</ul>

										</li>
										<li><a href="<?php echo $pages->get(1023)->url;?>">Machine Installation</a></li>

									</ul>

								</li>
								<li><a href="<?php echo $pages->get(1016)->url;?>" class="top-bar-right-menu__itemlink--dropdown">About Us</a>
														
									<ul>
																
										<li><a href="<?php echo $pages->get(1030)->url;?>">History</a></li>
										<li><a href="<?php echo $pages->get(1031)->url;?>">Team</a></li>
														
									</ul>
												
								</li>
								<li><a href="<?php echo $pages->get(1017)->url;?>" class="top-bar-right-menu__itemlink">Contact Us</a></li>

							</ul>

						</div>

					</div>

				</nav>

				<!-- Hero Section -->
				<section class="hero-other">

					<div class="wrap">

						<?php

					 		echo "<h1>$page->title</h1>";

							echo "<ul>";

								$allchildren = $page->children;

								foreach ($allchildren as $items) {
									echo "<li style='list-style:none'>";
									echo "<a href='$items->url'>$items->title</a>";
									echo "</li>";
								}

							echo "</ul>";

						?>

						

					</div>

				</section>

				<!-- Main Section -->
				<section class="main-contacts">

					<div class="wrap row">

						<div class="small-12 large-5 column">

							<div id="googleMap" style=""></div>

						</div>

						<div class="small-12 large-5 column">

							<p>Contact Form</p>

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
							<a href="<?php echo $pages->get(1)->url;?>">Home</a>
							<a href="<?php echo $pages->get(1015)->url;?>">What We Do</a>
							<a href="<?php echo $pages->get(1016)->url;?>">About Us</a>
							<a href="<?php echo $pages->get(1017)->url;?>">Contact Us</a>

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