<?php 
$config->urls->templates;
include("_header.php");
?>

				<!-- Sticky Nav -->

				<div class="sticky_container" data-sticky-container>

				  <div class="sticky show-for-large" id="example" data-sticky data-margin-top="0" style="width:100%;" data-top-anchor="stickhere">

					<nav data-magellan data-bar-offset="37" class="sticky_menu">

					  <ul id="stickhere" class="horizontal menu expanded">

						<li><a href="#top">To The Top</a></li>
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

											echo "<a href='$image->url'>";

												echo "<img src='{$image->width(468)->url}' alt='{$image->description}'>";

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


