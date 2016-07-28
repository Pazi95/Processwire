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

				<?php 

					$images = array();
					foreach($page->carousel_images as $image){
						$images[] = $image->url;
					}
								  
				?>

				<section class="hero">

					<div class="wrap">

						<h1>Welcome to the Website!</h1>

						<ul class="flex-container">

						<?php 

							$images = $page->carousel_images;

							if (count($images) > 0) {

								foreach ($images as $image) {

									echo "<li class='flex-item'>";

										echo "<img src='{$image->size(350,300)->url}' alt='{$image->description}'>";

									echo "</li>";

								}

							}								  
								
						?>

						</ul>

					</div>

				</section>

				<!-- Main Section -->
				<section class="main">

					<div class="wrap row">

						<div class="small-12 medium-12 column">

						<h1>Brief Description</h1>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							
						</div>

						<div class="small-12 medium-12 column">

						</div>

					</div>

				</section>

<?php 
$config->urls->templates;
include("_footer.php");
?>