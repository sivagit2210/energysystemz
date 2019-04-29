<?php include("config.php"); 
require_once("administrator/lib/data.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head><title>
	Untitled Page
</title>
 <script src="js/mootools-1.2.1-core-yc.js" type="text/javascript"></script>
<script src="js/mootools-1.2-more.js" type="text/javascript"></script>
<script src="js/jd.gallery.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />   
</head>
<body>
     <script type="text/javascript">
function startGallery() {
var myGallery = new gallery($('myGallery'), {
timed: true,
showArrows: false,
showCarousel: false
});
}
window.addEvent('domready', startGallery);
</script> 
<div class="content">
<div id="myGallery">

<?php
 $photlists = get_photo_list('homeslideshow');
 
 for($i=0;$i<count($photlists);$i++)
		{
		  // echo "<li><img src='administrator/slideshowimages/middle_thumb/".$photlists[$i]['image_name']."' /></li>";
		   
		   echo '
		   
		   <div class="imageElement">
<h3>&nbsp;</h3>
<p>'.$photlists[$i]['photo_description'].'</p>
<a href="#" title="'.$photlists[$i]['title'].'" class="open">'.$photlists[$i]['title'].'</a>
<img src="administrator/slideshowimages/middle_thumb/'.$photlists[$i]['image_name'].'" class="full"/>
<img src="administrator/slideshowimages/middle_thumb/'.$photlists[$i]['image_name'].'" class="thumbnail"/>
</div> ';
		   
		   
		   
		 } 
 
?>

</div>
</div>

</body>
</html>
