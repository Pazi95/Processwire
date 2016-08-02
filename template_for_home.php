<?php 
$config->urls->templates;
include("_header.php");
?>

				<!-- Hero Section -->
				<section class="hero">

					<div class="wrap">

						<h1>Welcome to the Caraher & Ward Ltd. Website!</h1>

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

							<li class="flex-item icon-item"><a class="button" href="<?php echo $url; ?>">Vehicle Maintenance and Repairs</a></li>

							<?php 
							$url = $pages->get(1015)->url;
							$url .= "#second";  
							?>

							<li class="flex-item icon-item"><a class="button" href="<?php echo $url; ?>">General Engineering</a></li>

							<?php 
							$url = $pages->get(1015)->url;
							$url .= "#third";  
							?>

							<li class="flex-item icon-item"><a class="button" href="<?php echo $url; ?>">Welding and Fabrication Work</a></li>

							<?php 
							$url = $pages->get(1015)->url;
							$url .= "#fourth";  
							?>

							<li class="flex-item icon-item"><a class="button" href="<?php echo $url; ?>">Machine Installation</a></li>
						
						</ul>


						<ul class="credits">

							<li><p>Credits</p></li>
							<li><p><span>Wrench Icon:</span> made by <a href="http://www.flaticon.com/authors/gregor-cresnar">Gregor Cresnar</a> from <a href="http://www.flaticon.com">www.flaticon.com</a></p></li>
							<li><p><span>Gear Icon:</span> made by <a href="http://www.flaticon.com/authors/egor-rumyantsev">Egor Rumyantsev</a> from <a href="http://www.flaticon.com">www.flaticon.com</a></p></li>
							<li><p><span>Welding Mask Icon:</span> made by <a href="http://www.flaticon.com/authors/freepik">Freepik</a> from <a href="http://www.flaticon.com">www.flaticon.com</a></p></li>
							<li><p><span>Drill Icon:</span> made by <a href="http://www.flaticon.com/authors/freepik">Freepik</a> from <a href="http://www.flaticon.com">www.flaticon.com</a></p></li>

						</ul>

					</div>

				</section>

<?php 
$config->urls->templates;
include("_footer.php");
?>