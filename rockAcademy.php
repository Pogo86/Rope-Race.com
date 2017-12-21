<?php $title= "Rock Academy Competition Climbing Team - Rope Race Climbing Centre";?>
<?php $metaDescription= "The Rock Academy climbing team A competition team for young climbers who want to push what they can do whilst climbing with like-minded young people. Training for National Competition!";?>
<!-- Also Like Links & imgs -->
<?php $alsoLikeLink1="geckosClimbingClub";?>
<?php $alsoLikeImg1="geckos";?>
<?php $alsoLikeLink2="miniMonkeys";?>
<?php $alsoLikeImg2="miniMonkeys";?>
<?php $alsoLikeLink3="tasterSession";?>
<?php $alsoLikeImg3="tasterSession";?>
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
      <h1 class="mt-4 mb-3">Rock Academy
        <small>Competition Climbinng Team</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php home_url();?>">Home</a>
        </li>
		  <li class="breadcrumb-item">
		  	<a href="kidsClimbing">Kids Climbing Lessons</a>
		  </li>
        <li class="breadcrumb-item active">Rock Academy</li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="/assets/img/rockAcademy750x500.jpg" alt="Rock Academy Climbing Team">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Rock Academy</h3>
          <p>A competition team for young climbers who want to push what they can do whilst climbing with like-minded young people
			<br><br><strong>The Sessions</strong>
          <br>The Rock Academy runs on a Wednesday evening from 6:00-7:30. Although in competition season members turn up early to warm up so they are ready to start at 6:00.
          </p>
        </div>

      </div>
      <div class="row">
      	<div class="col-md-12">
      		<p>
      		<strong>How it works</strong>
         	<br>The Rock Academy work to a set scheme. They will work on developing the different skills needed to perform to their full potential. 
         	<br>Some of the areas they will be working on are <strong>strength</strong>, <strong>endurance</strong> and <strong>agility</strong>.
         	<br><strong>The Cost</strong>
         	<br>The cost for the session is £9.00per person, this includes all the instruction and equipment. 
         	<br>Rock boots can be hired at an additional cost of £2.50
     		</p>
      	</div>
      </div>
      <!-- /.row -->
		<!-- Also Like Links -->    
		<?php require_once(dirname(__FILE__).'/alsoLike.php');?>

    </div>
    <!-- /.container -->

<?php require_once(dirname(__FILE__).'/footer.php');?>