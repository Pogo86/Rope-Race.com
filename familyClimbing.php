<?php $title= "Climbing for the Whole Family - Rope Race Climbing Centre";?>
<?php $metaDescription= "Our Family Climbing sessions run on Sundays 11:00am-1:00 pm.<br>They are the perfect session to climb as a family. You will be taught how to look after yourself and children";?>
<?php $groupTag="Adults";?>
<!-- Also Like Links & imgs -->
<?php $alsoLikeLink1="tasterSession";?>
<?php $alsoLikeImg1="tasterSession";?>
<?php $alsoLikeLink2="geckosClimbingClub";?>
<?php $alsoLikeImg2="geckos";?>
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
		<h1 class="mt-4 mb-3">Family Climbing
			<small> fun for the whole family</small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php home_url();?>">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="adultClimbing">Adult Climbng</a>
			</li>
			<li class="breadcrumb-item active">Family Climbing</li>
		</ol>

		<!-- Portfolio Item Row -->
		<div class="row">
			<div class="col-md-8">
				<img class="img-fluid" src="/assets/img/familyClimbing750x500.jpg" alt="Family Climbing">
			</div>

			<div class="col-md-4">
				<h3 class="my-3">Family Climbing</h3>
				<p> What could be better than you all spending your Sunday morning doing something new and exciting together with your family.  Indoor rock climbing is fun, exciting, challenging and most of all brilliant for all ages and abilities
					<br><strong>The Sessions</strong>
					<br>Our family climbing session runs every Sunday from 11am – 1.00pm, so whether you and you family are complete beginners or just wanting to refresh your skill this climbing sessions for you.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
					<strong>How it works</strong>
					<br>Once everyone is signed in your climbing instructor will take you into the main hall show everyone how to put their harness on correctly.
					<br>Then its onto the the rock climbing, we will teach you to belay (hold the rope)for your kids and the instructors will belay for you.  
					<!--<br>Giving everyone the chance to experience this exhilarating sport, if you decide that you and your family would like to take this further then why not book onto our Family Climbing Course?-->
					<br><strong>The Cost</strong>
					<br>The cost for the session is £10.00 per person, this includes all the instruction and equipment. Rock boots can be hired at an additional cost of £2.50.
				</p>
			</div>
		</div>
		<!-- /.row -->    
		
		<!-- Also Like Links -->    
		<?php require_once(dirname(__FILE__).'/alsoLike.php');?>

	</div>
	<!-- /.container -->

	<?php require_once(dirname(__FILE__).'/footer.php');?>