<?php 
$config->urls->templates;
include("_header.php");
?>

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
				<nav class="top-bar nav-desktop" id="top">

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

					  	<li><a href="#top">Back To The Top</a></li>
						<li><a href="#first">Who We Are</a></li>
						<li><a href="#second">Gallery</a></li>
					  
					  </ul>
					
					</nav>
				  
				  </div>
				
				</div>

				<!-- Main Section -->
				<section class="main-about main">

					<div class="wrap sections sections-about">

						<section id="first">
								
							<h2>Who We Are & Our History</h2>
							<!--<img src="http://images.hgmsites.net/med/car-repair_100311664_m.jpg">-->
							<p>Our company Caraher & Ward Ltd. was started in May 1986. Following the closure of C.R.V. Ltd. , which for many years was a leading manufacturer and assembler of road vehicle trucks and trailers. It also serviced and maintained many of the large motor vehicle fleets in the North East Region, e.g. Eircom, ESB, Dundalk Town Council, Louth County Council, Diageo Ireland. The Company derives its name from two of the senior foremen James Caraher & Sean Ward who started the company when C.R.V. Limited closed.</p>
							<p>We have maintained most of the personnel involved in the vehicle repair and maintenance contract work area of activity and still maintain the repair and maintenance contract with all of the above companies listed.</p>

						</section>

						<section id="second">

							<h2>Gallery</h2>
							
							<ul class="about-pics flex-container">

							<?php 

								$images = $page->carousel_images;

								if (count($images) > 0) {

									foreach ($images as $image) {

										echo "<li class='flex-item'>";

											echo "<img src='{$image->width(468)->url}' alt='{$image->description}'>";

										echo "</li>";

									}

								}								  
							?>

							</ul>


						</section>

					</div>

				</section>

<?php 
$config->urls->templates;
include("_footer.php");
?>


