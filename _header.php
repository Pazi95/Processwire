<!doctype html>

<?php

$root = $pages->get("/");
$children = $root->children();
$children->prepend($root);

?>

<html class="no-js" lang="en" dir="ltr">

	<head>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $page->title; ?></title>

	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/foundation.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/app.css">
	<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>foundation-icons/foundation-icons.css">

	<?php if($page->id == 1017){ ?>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfleDtpQf4QFVnZ6pcuW8yDFvKFbIqfrE&callback=initMap"></script>

		<script>

		var myCenter=new google.maps.LatLng(53.995216,-6.413037000000031);
		function initialize(){

			var mapProp={
				center:myCenter,
				zoom: 12,    
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};   

			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker=new google.maps.Marker({position:myCenter});
			marker.setMap(map);
			var infowindow = new google.maps.InfoWindow({content:"Find Us Here!"});

			infowindow.open(map,marker);

		}

		google.maps.event.addDomListener(window, 'load', initialize);

		</script>

	<?php } ?>

	</head>

	<body id="top">

		<div class="off-canvas-wrapper">

			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

				<div class="off-canvas position-left" id="mobile-menu" data-off-canvas>

					<?php

        				renderNavMobile($children);

        			?>

				</div>
		 
				<!-- Mobile Navigation -->
				<div class="off-canvas-content" data-off-canvas-content>

					<div class="title-bar hide-for-large">

						<div class="title-bar-left">

							<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
							<span class="title-bar-title">MENU</span>

						</div>

						<div class="title-bar-right">

							<h3 class="top-bar-right__logo">Caraher & Ward Ltd. <span>since 1986</span></h3>

						</div>

					</div>

				<!-- Desktop Navigation -->
				<nav class="top-bar nav-desktop data-topbar" role="navigation">

					<div class="wrap">

						<div class="top-bar-left">

							<h3 class="top-bar-left__logo">Caraher & Ward Ltd. <span>since 1986</span></h3>

						</div>

						<?php

        					renderNav($children);

        				?>

					</div>

				</nav>
