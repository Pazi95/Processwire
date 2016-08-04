<?php 
$config->urls->templates;
include("_header.php");
?>

				<!-- Sticky Nav -->

				<div class="sticky_container" data-sticky-container>

				  <div class="sticky show-for-large" id="example" data-sticky data-margin-top="0" style="width:100%;" data-top-anchor="stickhere">

					<nav data-magellan data-bar-offset="28" class="sticky_menu">

					  <ul id="stickhere" class="horizontal menu expanded">

						<li><a href="#top">To The Top</a></li>
						<li><a href="#first">Vehicle Maintenance</a></li>
						<li><a href="#second">Welding</a></li>
						<li><a href="#third">Machine Installation</a></li>
						<li><a href="#fourth">Past Projects</a></li>
					  
					  </ul>
					
					</nav>
				  
				  </div>
				
				</div>

				<!-- Main Section -->

				<section class="main">

					<div class="wrap">

					<?php 

						$images = array();
						foreach($page->images as $image){
							$images[] = $image->url;
						}
							  
					?>

						<div class="sections">

							<section id="first">
								
								<h2><?php echo $page->what_title1; ?></h2>
								<!--<img src="">-->
								<p><?php echo $page->what_section1; ?></p>

								<ul class="flex-container">

								<?php 

									$images = $page->images_2;

									if (count($images) > 0) {

										foreach ($images as $image) {

											echo "<li class='flex-item'>";

												echo "<a href='$image->url'>";

													echo "<img src='{$image->size(350,300)->url}' alt='{$image->description}'>";

												echo "</a>";

											echo "</li>";

										}

									}								  
									
								?>

								</ul>

							</section>

							<section id="second">
								
								<h2><?php echo $page->what_title2; ?></h2>
								<!--<img src="">-->
								<p><?php echo $page->what_section3; ?></p>

							<ul class="flex-container">

							<?php 

								$images = $page->images;

								if (count($images) > 0) {

									foreach ($images as $image) {

										echo "<li class='flex-item'>";

											echo "<a href='$image->url'>";

												echo "<img src='{$image->size(350,300)->url}' alt='{$image->description}'>";

											echo "</a>";

										echo "</li>";

									}

								}								  
								
							?>

							</ul>

							<div class="flex-video">
								<iframe src="https://www.youtube.com/embed/9IJ7lZM2Dw0" frameborder="0" allowfullscreen></iframe>
							</div>


							</section>


							<section id="third">
								
								<h2><?php echo $page->what_title3; ?></h2>
								<!--<img src="">-->
								<p><?php echo $page->what_section4; ?></p>


								<ul class="flex-container">

									<?php

									$images = $page->images_4;

									if (count($images) > 0) {

										foreach ($images as $image) {

											echo "<li class='flex-item'>";

												echo "<a href='$image->url'>";

													echo "<img src='{$image->size(350,300)->url}' alt='{$image->description}'>";

												echo "</a>";

											echo "</li>";

										}

									}

									?>

								</ul>


							</section>

							<section id="fourth">

								<h2><?php echo $page->what_title4; ?></h2>

								<ul class="flex-container">

								<?php 

									$images = $page->images_3;

									if (count($images) > 0) {

										foreach ($images as $image) {

											echo "<li class='flex-item projects_wrapper'>";

												echo "<a href='$image->url'>";

													echo "<img src='{$image->url}' alt='{$image->description}'>";

													echo "<div class='project_description'>";

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

					</div>

				</section>

<?php 
$config->urls->templates;
include("_footer.php");
?>



