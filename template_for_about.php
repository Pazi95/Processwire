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

	<body class="aboutus">

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
								<li><a href="<?php echo $pages->get(1016)->url;?>" class="top-bar-right-menu__itemlink aboutus">About Us</a></li>
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

						<li><a href="#first">Who We Are</a></li>
						<li><a href="#second">History</a></li>
					  
					  </ul>
					
					</nav>
				  
				  </div>
				
				</div>

				<!-- Main Section -->
				<section class="main-about main wrap">

					<?php 

						$images = array();
						foreach($page->images as $image){
							$images[] = $image->url;
						}
							  
					?>

					<div class="sections sections-about">

						<section id="first">
								
							<h2>Who We Are</h2>
							<!--<img src="http://images.hgmsites.net/med/car-repair_100311664_m.jpg">-->
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique, risus non consectetur semper, lacus dolor suscipit magna, a dignissim dolor sapien eget velit. Nulla arcu tellus, gravida a sapien ac, finibus sodales lacus. Morbi elit nisi, sodales eu nisl eu, malesuada luctus justo. Donec id metus nunc. Nam eu magna a orci sollicitudin luctus eu fermentum risus. Morbi tempus, ligula et tempor aliquam, neque dui eleifend nisi, nec feugiat metus augue ac mauris. Ut auctor id felis id congue. Praesent ut eleifend lectus.Pellentesque in orci sem. Phasellus nibh nisl, interdum at dignissim ut, luctus nec nisl. Etiam consequat hendrerit porttitor. Proin ut ultricies neque. Donec vehicula sollicitudin porttitor. Sed vitae consequat nisl. Pellentesque placerat pulvinar vestibulum.Donec gravida commodo faucibus. Praesent suscipit nisi eget finibus lacinia. Ut sapien urna, venenatis in ipsum id, pharetra viverra augue. Nam egestas blandit placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam suscipit pellentesque mauris, a ornare nisl rutrum sed. Maecenas lectus urna, dignissim nec lacus venenatis, fringilla ultricies lorem. Aenean maximus, sapien et bibendum rhoncus, elit massa tempor nisl, eu lobortis felis dolor ut nisl. Nam aliquam enim auctor auctor posuere. Cras volutpat ut nisi pharetra rutrum. Maecenas aliquet pharetra augue, id sodales eros fermentum congue. Pellentesque at metus blandit, auctor ligula vel, feugiat arcu. Proin nec suscipit neque.</p>

						</section>

						<section id="second">
								
							<h2>History</h2>
							<!--<img src="http://images.hgmsites.net/med/car-repair_100311664_m.jpg">-->
							<p>Our company Caraher & Ward Ltd. was started in May 1986. Following the closure of C.R.V. Ltd. , which for many years was a leading manufacturer and assembler of road behicle trucks and trailers. It also serviced and maintained many of the large motor vehicle fleets in the North East Region, e.g. Eircom, ESB, Dundalk Town Council, Louth County Council, Diageo Ireland. The Company derives its name from two of the senior foremen James Caraher & Sean Ward who started the company when C.R.V. Limited closed.</p>
							<p>We have maintained most of the personnel involved in the vehicle repair and maintenance contract work area of activity and still maintain the repair and maintenance contract with all of the above companies listed.</p>

							<div class="row">

							<?php 

								$images = $page->carousel_images;
								if (count($images) > 0) {
									foreach ($images as $image) {

										echo "<div class='about-image small-12 large-6 column'>";
											echo "<img src='{$image->width(468)->url}' alt='{$image->description}'>";
										echo "</div>";
									}
								}								  
							?>
							</div>

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



