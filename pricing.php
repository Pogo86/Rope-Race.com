<?php $title= "Rope Race Climbing Centre Contact Details";?>
<?php $metaDescription= "Need to contact us? All our information is here, call 0161 426 0226 or email contact@roperace.co.uk";?>
<?php $groupTag="Misc";?>
<?php require_once(dirname(__FILE__).'/header.php');?>

<!doctype html>
<html lang="en">
	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Contact
			<small> &amp; about us</small>
		</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
          <a href="<?php home_url();?>">Home</a>
			</li>
			<li class="breadcrumb-item active">Pricing</li>
		</ol>

		<div class="row">
			<div class="col-lg-12">
				<div id="accordion">
					<?php require_once(dirname(__FILE__).'/pricingMembership.php');?>
					<?php require_once(dirname(__FILE__).'/pricingDaily.php');?>
					<?php require_once(dirname(__FILE__).'/pricingGroups.php');?>
					<?php require_once(dirname(__FILE__).'/pricingAdultLessons.php');?>		
					<?php require_once(dirname(__FILE__).'/pricingChildLessons.php');?>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->
	<?php require_once(dirname(__FILE__).'/footer.php');?>