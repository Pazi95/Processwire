<?php 
$config->urls->templates;
include("_header.php");
?>

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
				
<?php 
$config->urls->templates;
include("_footer.php");
?>