<!doctype html>

<html class="no-js" lang="en" dir="ltr">

<head>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $page->title; ?></title>
	<link rel="stylesheet" href="<?php
	echo $config->urls->templates; ?>css/foundation.css">

	<link rel="stylesheet" href="<?php
	echo $config->urls->templates; ?>css/app.css">

	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>foundation-icons/foundation-icons.css">

</head>

	<body class="whatwedo">

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
								<li><a href="<?php echo $pages->get(1015)->url;?>" class="top-bar-right-menu__itemlink whatwedo">What We Do</a></li>
								<li><a href="<?php echo $pages->get(1016)->url;?>" class="top-bar-right-menu__itemlink">About Us</a></li>
								<li><a href="<?php echo $pages->get(1017)->url;?>" class="top-bar-right-menu__itemlink">Contact Us</a></li>

							</ul>

						</div>

					</div>

				</nav>

				<!-- Sticky Nav -->

				<div class="sticky_container" data-sticky-container>

				  <div class="sticky show-for-large" id="example" data-sticky data-margin-top="0" style="width:100%;" data-top-anchor="stickhere">

					<nav data-magellan data-bar-offset="37" class="sticky_menu">

					  <ul id="stickhere" class="horizontal menu expanded">

						<li><a href="#first">Vehicle Maintenance</a></li>
						<li><a href="#second">General Engineering</a></li>
						<li><a href="#third">Chassis Repairs</a></li>
						<li><a href="#fourth">Welding</a></li>
						<li><a href="#fifth">Machine Installation</a></li>
					  
					  </ul>
					
					</nav>
				  
				  </div>
				
				</div>

				<!-- Main Section -->

				<section class="main wrap">

					<?php 

						$images = array();
						foreach($page->images as $image){
							$images[] = $image->url;
						}
							  
					?>

					<div class="sections">

						<section id="first">
							
							<h2>Vehicle Maintenance and Repairs</h2>
							<!--<img src="">-->
							<p>We carry out accident repairs and refurbishment work to buses for Dublin Bus and Bus Eireann and also maintain school bus fleet for Bus Eireann in Louth, Cavan & Monaghan.</p>
							<p>We have a very large, well equipped workshop with 2 overhead cranes, 6 pits, a post hydraulic hoist, a brake tester, 2 forklifts, a spray booth, power wash and bus ramp for full under body and bus body wash. We have all the necessary tools and equipment to carry out all service and maintenance contracts. Our workshop has the height necessary to service all vehicles.</p>
							<p>We operate diagnostic equipment to carry out engine/ecu diagnostic checks. We carry out ABS/ASR checks and engine re-calibrations.</p>

						</section>

						<section id="second">
							
							<h2>General Engineering</h2>
							<!--<img src="">-->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique, risus non consectetur semper, lacus dolor suscipit magna, a dignissim dolor sapien eget velit. Nulla arcu tellus, gravida a sapien ac, finibus sodales lacus. Morbi elit nisi, sodales eu nisl eu, malesuada luctus justo. Donec id metus nunc. Nam eu magna a orci sollicitudin luctus eu fermentum risus. Morbi tempus, ligula et tempor aliquam, neque dui eleifend nisi, nec feugiat metus augue ac mauris. Ut auctor id felis id congue. Praesent ut eleifend lectus.Pellentesque in orci sem. Phasellus nibh nisl, interdum at dignissim ut, luctus nec nisl. Etiam consequat hendrerit porttitor. Proin ut ultricies neque. Donec vehicula sollicitudin porttitor. Sed vitae consequat nisl. Pellentesque placerat pulvinar vestibulum.Donec gravida commodo faucibus. Praesent suscipit nisi eget finibus lacinia. Ut sapien urna, venenatis in ipsum id, pharetra viverra augue. Nam egestas blandit placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam suscipit pellentesque mauris, a ornare nisl rutrum sed. Maecenas lectus urna, dignissim nec lacus venenatis, fringilla ultricies lorem. Aenean maximus, sapien et bibendum rhoncus, elit massa tempor nisl, eu lobortis felis dolor ut nisl. Nam aliquam enim auctor auctor posuere. Cras volutpat ut nisi pharetra rutrum. Maecenas aliquet pharetra augue, id sodales eros fermentum congue. Pellentesque at metus blandit, auctor ligula vel, feugiat arcu. Proin nec suscipit neque.</p>


						</section>

						<section id="third">
							
							<h2>Chassis Repairs</h2>
							<!--<img src="">-->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique, risus non consectetur semper, lacus dolor suscipit magna, a dignissim dolor sapien eget velit. Nulla arcu tellus, gravida a sapien ac, finibus sodales lacus. Morbi elit nisi, sodales eu nisl eu, malesuada luctus justo. Donec id metus nunc. Nam eu magna a orci sollicitudin luctus eu fermentum risus. Morbi tempus, ligula et tempor aliquam, neque dui eleifend nisi, nec feugiat metus augue ac mauris. Ut auctor id felis id congue. Praesent ut eleifend lectus.Pellentesque in orci sem. Phasellus nibh nisl, interdum at dignissim ut, luctus nec nisl. Etiam consequat hendrerit porttitor. Proin ut ultricies neque. Donec vehicula sollicitudin porttitor. Sed vitae consequat nisl. Pellentesque placerat pulvinar vestibulum.Donec gravida commodo faucibus. Praesent suscipit nisi eget finibus lacinia. Ut sapien urna, venenatis in ipsum id, pharetra viverra augue. Nam egestas blandit placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam suscipit pellentesque mauris, a ornare nisl rutrum sed. Maecenas lectus urna, dignissim nec lacus venenatis, fringilla ultricies lorem. Aenean maximus, sapien et bibendum rhoncus, elit massa tempor nisl, eu lobortis felis dolor ut nisl. Nam aliquam enim auctor auctor posuere. Cras volutpat ut nisi pharetra rutrum. Maecenas aliquet pharetra augue, id sodales eros fermentum congue. Pellentesque at metus blandit, auctor ligula vel, feugiat arcu. Proin nec suscipit neque.</p>


						</section>

						<section id="fourth">
							
							<h2>Welding and Fabrication Work</h2>
							<!--<img src="">-->
							<p>We provide material handling solutions to the brewery trade such as e.g. provision of keg stacking enclosures, keg lifting equipment and conveyor installation. Other areas of our activities include building of trailers, repair and maintenance of same.</p>

							<div class="row">
								
								<div class="sectionfour small-12 large-6 column">
									
									<?php echo "<img src='$images[0]'>"; ?>

								</div>

								<div class="sectionfour small-12 large-6 column">
									
									<?php echo "<img src='$images[1]'>"; ?>

								</div>

							</div>


						</section>


						<section id="fifth">
							
							<h2>Machine Installation</h2>
							<!--<img src="">-->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique, risus non consectetur semper, lacus dolor suscipit magna, a dignissim dolor sapien eget velit. Nulla arcu tellus, gravida a sapien ac, finibus sodales lacus. Morbi elit nisi, sodales eu nisl eu, malesuada luctus justo. Donec id metus nunc. Nam eu magna a orci sollicitudin luctus eu fermentum risus. Morbi tempus, ligula et tempor aliquam, neque dui eleifend nisi, nec feugiat metus augue ac mauris. Ut auctor id felis id congue. Praesent ut eleifend lectus.Pellentesque in orci sem. Phasellus nibh nisl, interdum at dignissim ut, luctus nec nisl. Etiam consequat hendrerit porttitor. Proin ut ultricies neque. Donec vehicula sollicitudin porttitor. Sed vitae consequat nisl. Pellentesque placerat pulvinar vestibulum.Donec gravida commodo faucibus. Praesent suscipit nisi eget finibus lacinia. Ut sapien urna, venenatis in ipsum id, pharetra viverra augue. Nam egestas blandit placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam suscipit pellentesque mauris, a ornare nisl rutrum sed. Maecenas lectus urna, dignissim nec lacus venenatis, fringilla ultricies lorem. Aenean maximus, sapien et bibendum rhoncus, elit massa tempor nisl, eu lobortis felis dolor ut nisl. Nam aliquam enim auctor auctor posuere. Cras volutpat ut nisi pharetra rutrum. Maecenas aliquet pharetra augue, id sodales eros fermentum congue. Pellentesque at metus blandit, auctor ligula vel, feugiat arcu. Proin nec suscipit neque.</p>


						</section>

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



