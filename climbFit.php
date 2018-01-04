<?php $title= "Climb Fit 2018 - Fitness through climbing at the Rope Race Climbing Centre";?>
<?php $metaDescription= "Climbing is a great way to get fit. It gives you a whole body workout from finger to toes!";?>
<?php $groupTag="Adults";?>
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
      <h1 class="mt-4 mb-3">Climb Fit in 2018
        <small>the most fun full body workout without the gym</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php home_url();?>">Home</a>
        </li>
		  <li class="breadcrumb-item">
		  	<a href="adultClimbing.php">Adult Climbing</a>
		  </li>
        <li class="breadcrumb-item active">Climb Fit 2018</li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="assets/img/climbFit750x500.jpg" alt="Climb Fit 2018 - fitness through climbing">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Climb Fit 2018 - Fitness through climbing</h3>
          <p>
			Fed up with the gym? why not be part of the latest Olympic sport?  It's not just a sport it's a lifestyle.
			  Rather than running on the spot for the next 12 months, <i>plan an adventure, get fit and meet new likeminded people</i>.
			<br><br><strong>Benefits</strong>
          	<br>Climbing has been proven to give you a whole body work out no matter your ability, from beginner to professional climbing is great for your general fitness, agility, strength and even problem-solving skills
          </p>
        </div>

      </div>
      <div class="row">
      	<div class="col-md-12">
      		<p>
      		<strong>Who is climbing for?</strong>
         	<br>Rock climbing is really accessible to anyone and everyone. There are routes on almost all walls that everyone has the ability to push themselves. 
			<br>Even being afraid of heights isn't an issue, there is a type of climbing called bouldering that focuses on lower level climbing.
         	<br>
         	<br><strong>How to get into Climbing</strong>
     		</p>
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<h3>Beginners Course</h3>
					<a href="beginnersClimbing.php"><img class="card-img-top" src="assets/img/beginners700x400.jpg" alt=""></a>
					<p>
						Learn everything you need to climb indoors. This is the best course around and will have you climbing in no time at all!
						<br>
						<a href="beginnersClimbing.php" class="btn btn-primary">Take me there</a>
					</p>
				</div>
				<div class="col-lg-6 col-md-12">
					<h3>Taster Session</h3>
					<a href="tasterSession.php"><img class="card-img-top" src="assets/img/tasterSession700x400.jpg" alt=""></a>
					<p>
						Looking for something new to have a go at? Then why not have a go at indoor rock climbing?
						<br>
						<a href="tasterSession.php" class="btn btn-primary">Take me there</a>
					</p>
				</div>
			</div>
			<p align="center">
				<a href="tel:01614260226" class="btn btn-primary">Call &amp; Book Now</a>
				<br>0161 426 0226
			</p>
      	</div>
      </div>
      <!-- /.row -->
		<!-- Also Like Links -->    
		<?php require_once(dirname(__FILE__).'/alsoLike.php');?>

    </div>
    <!-- /.container -->

<?php require_once(dirname(__FILE__).'/footer.php');?>