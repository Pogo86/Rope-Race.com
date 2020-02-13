<?php $title= "Archery at Rope Race Climbing Centre";?>
<?php $metaDescription= "Archery courses for any group, any ability and any size. Our professional instructors will teach you everything you need to know to have a fun safe session and hopefully hit some bullseyes.";?>
<?php $groupTag="Misc";?>
<!-- Also Like Links & imgs -->
<?php $alsoLikeLink1="beginnersClimbing";?>
<?php $alsoLikeImg1="beginners";?>
<?php $alsoLikeLink2="tasterSession";?>
<?php $alsoLikeImg2="tasterSession";?>
<?php $alsoLikeLink3="geckosClimbingClub";?>
<?php $alsoLikeImg3="geckos";?>
<?php $alsoLikeLink4="miniMonkeys";?>
<?php $alsoLikeImg4="miniMonkeys";?>
<!-- /. Also Like Links & imgs -->

<!-- Header -->
<?php require_once(dirname(__FILE__).'/header.php');?>
<!-- /. Header -->

<!doctype html>
<html lang="en">

	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Archery Sessions
			<small> are you a Robin Hood or Katniss Everdeen</small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php home_url();?>">Home</a>
			</li>
			<li class="breadcrumb-item active">Archery</li>
		</ol>

		<!-- Portfolio Item Row -->
		<div class="row">

			<div class="col-md-8">
				<img class="img-fluid" src="/assets/img/archery750x500.jpg" alt="">
			</div>

			<div class="col-md-4">
				<h3 class="my-3">Archery</h3>
				<p>Always fancied yourself as Robin Hood or Maid Marian? Then why not come and have a go at indoor archery here at Rope Race.
				<br><strong>The Sessions</strong>
				<br>We can run archery sessions at any time on any day, so whether it’s a one-off taster for yourself, or a hen or stag do for up to 15 we will be able run a fun and exciting archery session.
				<br>
				<br><strong>Booking Essential</strong></p>
            	<div>
              		<a href="tel:01614260226" class="btn btn-primary">Call Now</a>
					<p><span class="mHide">Call and book on 0161 426 0226</span></p>
            	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
					<strong>How it works</strong>
					<br>We will teach you all you need to know about shooting a recurve bow safely, from holding the bow correctly, use of the arm guard, loading the arrows in the correct position and getting the most out of learning to shoot.
					<br><strong>The Cost</strong>
					<h4>Group Sessions</h4>
					£10.00 for 2 people - Groups up to 6 people. Saturdays 1:00 - 2:00 & Sundays 2:00 - 3:00
					<h4>Private Sessions</h4>
					2 people - £25.00
					<br>3 people - £35.00
					<br>4 people - £45.00
					<br>Can e booked at any time.
				</p>

			</div>
		</div>
		<!-- /.row --> 

		<!-- Also Like Links -->    
		<?php require_once(dirname(__FILE__).'/alsoLike.php');?>

	</div>
	<!-- /.container -->

	<?php require_once(dirname(__FILE__).'/footer.php');?>