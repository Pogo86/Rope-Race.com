<?php
//Get config file
require_once(dirname(__FILE__).'/config.php');

//Output the page title
function the_title(){
	global $title;
	
	echo $title;
}

//Output the page subtitle
function the_subtitle(){
	global $subtitle;
	
	echo $subtitle;
}

//Output the gTag Group
function the_group_tag(){
	global $groupTag;
	
	echo $groupTag;
}

//Output the URL
function home_url(){
	echo ABS_URL;
}
//Output the meta description
function the_meta_description(){
	global $metaDescription;
	
	echo $metaDescription;
}
//Linked Pages
function canonical(){
	global $canonical;
	
	echo $canonical;
}
//Social Title
function og_title(){
	global $og_title;
	
	echo $og_title;
}
//Social Description
function og_description(){
	global $og_description;
	
	echo $og_description;
}
//Social URL
function og_url(){
	global $og_url;
	
	echo $og_url;
}

//also like link & IMG 1
function also_like_link_1(){
	global $alsoLikeLink1;
	
	echo $alsoLikeLink1;
}

function also_like_img_1(){
	global $alsoLikeImg1;
	
	echo IMG_URL,$alsoLikeImg1,"500x300.jpg";
}
function also_like_img_1_m(){
	global $alsoLikeImg1;
	
	echo IMG_URL,$alsoLikeImg1,"348x199.jpg";
}

//also like link & IMG 2
function also_like_link_2(){
	global $alsoLikeLink2;
	
	echo $alsoLikeLink2;
}

function also_like_img_2(){
	global $alsoLikeImg2;
	
	echo IMG_URL,$alsoLikeImg2,"500x300.jpg";
}
function also_like_img_2_m(){
	global $alsoLikeImg2;
	
	echo IMG_URL,$alsoLikeImg2,"348x199.jpg";
}

//also like link & IMG 3
function also_like_link_3(){
	global $alsoLikeLink3;
	
	echo $alsoLikeLink3;
}

function also_like_img_3(){
	global $alsoLikeImg3;
	
	echo IMG_URL,$alsoLikeImg3,"500x300.jpg";
}
function also_like_img_3_m(){
	global $alsoLikeImg3;
	
	echo IMG_URL,$alsoLikeImg3,"348x199.jpg";
}

//also like link & IMG 4
function also_like_link_4(){
	global $alsoLikeLink4;
	
	echo $alsoLikeLink4;
}

function also_like_img_4(){
	global $alsoLikeImg3;
	
	echo IMG_URL,$alsoLikeImg4,"500x300.jpg";
}
function also_like_img_4_m(){
	global $alsoLikeImg4;
	
	echo IMG_URL,$alsoLikeImg4,"348x199.jpg";
}
?>