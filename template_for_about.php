<?php 
$config->urls->templates;
include("_header.php");
?>
				<!-- Main Section -->
				<section class="main-about main">

					<div class="wrap sections sections-about">

						<section class="top-title">
								
							<h2><?php echo $page->about_title1; ?></h2>
							<!--<img src="http://images.hgmsites.net/med/car-repair_100311664_m.jpg">-->
							<p><?php echo $page->about_section; ?></p>

						</section>

						<section>

							<h2><?php echo $page->about_title2; ?></h2>
							
							<ul class="about-pics flex-container">

							<?php 

								$images = $page->carousel_images;

								if (count($images) > 0) {

									foreach ($images as $image) {

										echo "<li class='flex-item about_wrapper'>";

											echo "<a href='$image->url'>";

												echo "<img src='{$image->width(468)->url}' alt='{$image->description}'>";

												echo "<div class='about_description'>";

													echo "<p>$image->description</p>";

												echo "</div>";

											echo "</a>";

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


