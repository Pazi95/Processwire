<!doctype html>

<html class="no-js" lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php echo $page->title; ?></title>

		<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/foundation.css">
		<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/app.css">

	</head>

	<body class="home">

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
				<nav class="top-bar nav-desktop data-topbar" role="navigation">

					<div class="wrap">

						<div class="top-bar-left">

							<h3 class="top-bar-left__logo">Caraher & Ward Ltd.</h3>

						</div>

						<div class="top-bar-right">

							<ul class="menu top-bar-right-menu">

								<li><a href="<?php echo $pages->get(1)->url;?>" class="top-bar-right-menu__itemlink home">Home</a></li>
								<li><a href="<?php echo $pages->get(1015)->url;?>" class="top-bar-right-menu__itemlink--dropdown">What We Do</a>

								</li>
								<li><a href="<?php echo $pages->get(1016)->url;?>" class="top-bar-right-menu__itemlink--dropdown">About Us</a>
												
								</li>
								<li><a href="<?php echo $pages->get(1017)->url;?>" class="top-bar-right-menu__itemlinkx0">Contact Us</a></li>

							</ul>

						</div>

					</div>

				</nav>

				<!-- Hero Section -->
				<section class="hero">

					<div class="wrap">

						<h1>Welcome to the Caraher&Ward Website!</h1>

						<div class="orbit" role="region" aria-label="CW Carousel" data-orbit>

							<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span> &#9664;&#xFE0E;</button>

							<button class="orbit-next"><span class="show-for-sr">Next Slide</span> &#9654;&#xFE0E;</button>

							<ul class="orbit-container">

							  <?php 
							  $images = array();
							  foreach($page->carousel_images as $image){
								$images[] = $image->url;
							  }
							  
							  ?>

							  <li class="orbit-slide is-active">
								<?php echo "<img class='orbit-image' src='$images[0]'>"; ?>
								<figcaption class="orbit-caption">Pic1</figcaption>
							  </li>

							  <li class="orbit-slide">
								<?php echo "<img class='orbit-image' src='$images[1]'>"; ?>
								<figcaption class="orbit-caption">Pic2</figcaption>
							  </li>

							  <li class="orbit-slide">
								<?php echo "<img class='orbit-image' src='$images[2]'>"; ?>
								<figcaption class="orbit-caption">Pic3</figcaption>
							  </li>

							  <li class="orbit-slide">
								<?php echo "<img class='orbit-image' src='$images[3]'>"; ?>
								<figcaption class="orbit-caption">Pic4</figcaption>
							  </li>

							</ul>

							<nav class="orbit-bullets">

							  <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>

							  <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>

							  <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>

							  <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>

							</nav>
						
						</div>

					</div>

				</section>

				<!-- Main Section -->
				<section class="main">

					<div class="wrap row">

						<div class="small-12 medium-7 column">

						<h1>Brief Description</h1>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							
						</div>

						<div class="small-12 medium-5 column">

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



