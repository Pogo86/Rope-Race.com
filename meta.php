<title><?php the_title(); ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php the_meta_description(); ?>">
<link rel=”canonical” href=”<?php canonical(); ?>” />
<meta name=”robots” content=”index, follow”>
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php og_title(); ?>" />
<meta property="og:description" content="<?php og_description(); ?>" />
<meta property="og:url" content="<?php og_url(); ?>" />
<meta property="og:site_name" content="RopeRace.com" />

<?php require_once(dirname(__FILE__).'/FBPixel.php');?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105623650-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-105623650-1', {
		 	'content_group1': '<?php the_group_tag(); ?>'
		 }
		);
</script>