<?php require_once(dirname(__FILE__).'/functions.php');?>

<!doctype html>
<html lang="en">

	<head>
		<?php require_once(dirname(__FILE__).'/meta.php');?>
		<!-- Bootstrap core CSS -->
		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/modern-business-min.css" rel="stylesheet">

		<link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/main-min.css">
        <link rel="stylesheet" href="css/buyNowButton-min.css">
        <?php require_once(dirname(__FILE__).'/icons.php');?>
		<link rel="stylesheet" href="css/haloween.css">
	</head>

	<body>
	<!-- Navigation -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php home_url(); ?>"><img src="assets/img/logos/LogoNav.png" style="max-width: 15vw; max-height: 50px" alt="Rope Race Climbing Centre" class="img-responsive">Rope Race Climbing Centre</span></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="adultClimbing">Adult Climbing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="kidsClimbing">Kids Climbing</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownContact" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact &amp; Prices</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownContact">
							<a class="dropdown-item" href="contact">Contact</a>
							<a class="dropdown-item" href="pricing">Prices</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCharityEvents" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Charity &amp; Events</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownCharityEvents">
							<a class="dropdown-item" href="mobileClimbingWall">Mobile Climbing Wall</a>
							<a class="dropdown-item" href="abseils">Abseil Events</a>
<!--							<a class="dropdown-item" href="zipWires">Zip Wire Events</a>-->
							<!--<a class="dropdown-item" href="indoorCharityEvents">Indoor Events</a>-->
							<!--<a class="dropdown-item" href="functionRoom">Function Room Hire</a>-->
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="archery">Archery</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>