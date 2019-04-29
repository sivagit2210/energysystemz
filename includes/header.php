<?php 
include("config.php"); 
require_once("administrator/lib/dmlib.php");
require_once("administrator/lib/data.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome To Energy Systems</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/bluenovacss.css" />
<link rel="stylesheet" type="text/css" href="css/tabmenu.css" />
<link rel="stylesheet" type="text/css" href="css/enlarge.css" />
<link rel="icon" type="image/png" href="images/es_logo.png">
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

<script type="text/javascript">
/* <![CDATA[ */
$(document).ready(function(){
	$("#tabs li").click(function() {
		//	First remove class "active" from currently active tab
		$("#tabs li").removeClass('active');

		//	Now add class "active" to the selected/clicked tab
		$(this).addClass("active");

		//	Hide all tab content
		$(".tab_content").hide();

		//	Here we get the href value of the selected tab
		var selected_tab = $(this).find("a").attr("href");

		//	Show the selected tab content
		$(selected_tab).fadeIn();

		//	At the end, we add return false so that the click on the link is not executed
		return false;
	});
});
/* ]]> */
</script>
</head>
<body>
<div class="bodycontainer">
<div class="banner_bg"><div class="bannerdemo"><div class="logo"><a href='index.php' ><img src="images/es_logo.png" /></a></div></div></div>
<div class="main_menu">
<div class="menu">
<ul>
 <li style=" padding-left:0px;"><img src="images/menu_div.gif" /></li>
 <li><a href="index.php">Home</a></li>
 <li><img src="images/menu_div.gif" /></li>
  <li><a href="aboutus.php">Aboutus</a></li>
   <li><img src="images/menu_div.gif" /></li>
 <li><a href="products.php">Products</a></li>
  <li><img src="images/menu_div.gif" /></li>
  <li><a href="http://27.251.146.172:81/" target="_blank">Login &amp; Monitor</a></li>
     <li><img src="images/menu_div.gif" /></li>
   <li><a href="media.php">News</a></li>
    <li><img src="images/menu_div.gif" /></li>
     <li><a href="#">Clients</a></li>
   <li><img src="images/menu_div.gif" /></li>
   <li><a href="projects.php">Projects</a></li>
    <li><img src="images/menu_div.gif" /></li>
	<li><a href="faq.php">FAQ</a></li>
    <li><img src="images/menu_div.gif" /></li>
     <li><a href="contactus.php">Contact Us</a></li>
   </ul>
</div>
</div>