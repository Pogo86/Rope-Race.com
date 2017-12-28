<?php $title= "Charity Abseils Events - Rope Race Climbing Centre";?>
<?php $metaDescription= "";?>
<?php $groupTag="Charity";?>
<!-- Also Like Links & imgs -->
<?php $alsoLikeLink1="mobileClimbingWall";?>
<?php $alsoLikeImg1="mobileClimbingWall";?>
<?php $alsoLikeLink2="functionRoom";?>
<?php $alsoLikeImg2="fRoom";?>
<?php $alsoLikeLink3="holidayClub";?>
<?php $alsoLikeImg3="schoolHolidays";?>
<?php $alsoLikeLink4="beginnersClimbing";?>
<?php $alsoLikeImg4="beginners";?>
<!-- /. Also Like Links & imgs -->

<!-- Header -->
<?php require_once(dirname(__FILE__).'/header.php');?>
<!-- /. Header -->

<!doctype html>
<html lang="en">
	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Charity Abseils
			<small> An amazing way to raise funds for your charity.</small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php home_url();?>">Home</a>
			</li>
			<li class="breadcrumb-item active">Charity Abseils</li>
		</ol>

		<!-- Portfolio Item Row -->
		<div class="row">
			<div class="col-md-8">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<!-- Slide One - Set the background image for this slide in the line below -->
						<div class="carousel-item active" style="background-image: url('assets/img/charityAbseils0-750x500.jpg')">
							<div class="carousel-caption d-none d-md-block">
							<!--<h3>First Slide</h3>
							<p>This is a description for the first slide.</p>-->
							</div>
						</div>
						<!-- Slide Two - Set the background image for this slide in the line below -->
						<div class="carousel-item" style="background-image: url('assets/img/charityAbseils1-750x500.jpg')">
							<div class="carousel-caption d-none d-md-block">
							<!--<h3>Second Slide</h3>
							<p>This is a description for the second slide.</p>-->
							</div>
						</div>
						<!-- Slide Three - Set the background image for this slide in the line below -->
						<div class="carousel-item" style="background-image: url('assets/img/charityAbseils2-750x500.jpg')">
							<div class="carousel-caption d-none d-md-block">
							<!--<h3>Third Slide</h3>
							<p>This is a description for the third slide.</p>-->
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

			<div class="col-md-4">
				<h3 class="my-3">Charity Abseils</h3>
				<p>Abseiling is an amazing adrenaline filled activity that anyone can do.  All you need to do is let our instructors do all the hard work whilst you have the adventure of a lifetime whilst raising money. 
				<br><strong>The Event</strong>
				<br>Abseiling is a brilliant way of showcasing your charity along with raising much needed funds.  All you need to do is get some daring people together.
				</p>
			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
					<strong>How it works</strong>
					<br>An abseil can run from most buildings, bridges and rock faces, once you have decided on your preferred site you will be allocated your event abseil coordinator and we will get the show on the road. All we probably need to do a site visit and get all the relevant paper work from the estates department together and off we go.  Each participant will be kitted up by one of our abseil team then it off to start the adventure.
					<br><strong>The Cost</strong>
					<br>The cost will be £900 for the first rope and all additional ropes will be £500 per day.
					<br>This includes all the equipment, risk assessments, method statements and staff for the day.
					<br>Site visits if necessary will be charged at £150 
					<br>Participants to be over the age of 16. Under 18's require parental consent.
					<br>All participants to be healthy any concerns then we would like to discuss with the participant.

				</p>
			</div>
		</div>
		<!-- /.row -->
		<!-- Also Like Links -->    
		<?php require_once(dirname(__FILE__).'/alsoLike.php');?>
	</div>
	<!-- /.container -->

	<?php require_once(dirname(__FILE__).'/footer.php');?>