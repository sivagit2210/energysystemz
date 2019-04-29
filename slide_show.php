<?php include("config.php"); 
require_once("administrator/lib/data.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head><title>
	Untitled Page
</title>
     <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
     <style type="text/css">
ul.ppt {
	
}

.ppt li {
	list-style-type: none;
	position: absolute;
	top: 0px;
	left: 0px;
	}



</style> 
</head>
<body>

<?php
 $photlists = get_photo_list('homeslideshow');
?>
<div id="pagescript">
<ul class='ppt'>
<?php
 for($i=0;$i<count($photlists);$i++)
		{
		   echo "<li><img src='administrator/slideshowimages/middle_thumb/".$photlists[$i]['image_name']."' /></li>";
		   
		 }
?>

</ul>
</div>

    <script type="text/javascript">
$('.ppt li:gt(0)').hide();
$('.ppt li:last').addClass('last');
var cur = $('.ppt li:first');

function animate() {
	cur.fadeOut( 1000 );
	if ( cur.attr('class') == 'last' )
		cur = $('.ppt li:first');
	else
		cur = cur.next();
	cur.fadeIn( 1000 );
}


$(function() {
	setInterval( "animate()", 5000 );
} );
</script>
    
</body>
</html>
