<?php 
$config->urls->templates;
include("_header.php");
?>

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
				<nav class="top-bar nav-desktop data-topbar" role="navigation">

					<div class="wrap">

						<div class="top-bar-left">

							<h3 class="top-bar-left__logo">Caraher & Ward Ltd.</h3>


						</div>

						<div class="top-bar-right">

							<ul class="menu top-bar-right-menu">

								<li><a href="<?php echo $pages->get(1)->url;?>" class="top-bar-right-menu__itemlink home">Home</a></li>

								<li><a href="<?php echo $pages->get(1015)->url;?>" class="top-bar-right-menu__itemlink">What We Do</a></li>

								<li><a href="<?php echo $pages->get(1016)->url;?>" class="top-bar-right-menu__itemlink">About Us</a></li>

								<li><a href="<?php echo $pages->get(1017)->url;?>" class="top-bar-right-menu__itemlink">Contact Us</a></li>

							</ul>

						</div>

					</div>

				</nav>

				<!-- Hero Section -->
				<section class="hero">

					<div class="wrap">

						<h1>Welcome to the Caraher & Ward Website!</h1>

						<ul class="flex-container main-image-wrapper">

						<?php 

							$images = $page->carousel_images;

							if (count($images) > 0) {

								foreach ($images as $image) {

									echo "<li class='flex-item'>";

										echo "<img class='main-image' src='{$image->url}' alt='{$image->description}'>";

										echo "<div class='description'>";

													echo "<p class='description-content'>Caraher & Ward Ltd. is a vehicle repairs company, founded in 1986. The business is located in the premises formerly used by C.R.V. Ltd. , which was originally used by The Great Northern Railway.</p>";

										echo "</div>";

									echo "</li>";

								}

							}


							$images = $page->images;

							if (count($images) > 0) {

								foreach ($images as $image) {

									echo "<li class='flex-item'>";

										echo "<img class='main-image' src='{$image->width(450)->url}' alt='{$image->description}'>";

									echo "</li>";

								}

							}									  
								
						?>

						</ul>

					</div>

				</section>

				<!-- Main Section -->
				<section class="main">

					<div class="wrap">

						<h1>Services</h1>

						<ul class="flex-container image-container">

						<?php

						$images = $page->services_images;

						if (count($images) > 0) {

							foreach ($images as $image) {

								echo "<li class='flex-item flex-image'>";

									echo "<img class='main-icons' src='{$image->size(150,150)->url}' alt='{$image->description}'>";

								echo "</li>";

							}

						}	

						?>

						</ul>

						<ul class="flex-container">

							<?php 
							$url = $pages->get(1015)->url;
							$url .= "#first";  
							?>

							<li class="flex-item"><a class="button" href="<?php echo $url; ?>">Vehicle Maintenance and Repairs</a></li>

							<?php 
							$url = $pages->get(1015)->url;
							$url .= "#second";  
							?>

							<li class="flex-item"><a class="button" href="<?php echo $url; ?>">General Engineering</a></li>

							<?php 
							$url = $pages->get(1015)->url;
							$url .= "#third";  
							?>

							<li class="flex-item"><a class="button" href="<?php echo $url; ?>">Welding and Fabrication Work</a></li>

							<?php 
							$url = $pages->get(1015)->url;
							$url .= "#fourth";  
							?>

							<li class="flex-item"><a class="button" href="<?php echo $url; ?>">Machine Installation</a></li>
						
						</ul>

					</div>

				</section>

<?php 
$config->urls->templates;
include("_footer.php");
?>