<?php include("config.php"); 
require_once("administrator/lib/data.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head><title>
	Untitled Page
</title>
<style>
*
{
padding:0px;
margin:0px;
}

</style>
<link rel='stylesheet' id='style-css'  href='css/diapo.css' type='text/css' media='all'>
<script type='text/javascript' src='js/jquery.min.js'></script>
<!--[if !IE]><!--><script type='text/javascript' src='js/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='js/diapo.js'></script> 
<style>
.pix_diapo {
	background: #000;
	-moz-box-shadow: 0 3px 6px #000;
	-webkit-box-shadow: 0 3px 6px #000;
	box-shadow: 0 3px 6px #000;
	height: 400px;
	margin: 0 10px;
	overflow: hidden;
	position: relative;
	width: 600px;
}
</style>

<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>
</head>
<body>
<div id="slide">
<table width="600px;">
<tr>
<td width="600px;" valign="top"> 
   <section> 
    
    	<div style="overflow:hidden; width:600px;"> 
                <div class="pix_diapo">

				<?php
				$pageid = @$_GET['pid'];
 $photlists = get_photo_list($pageid);
 for($i=0;$i<count($photlists);$i++)
		{		  
		   echo "<div data-thumb='administrator/slideshowimages/thumbs/".$photlists[$i]["image_name"]."'>";
		   echo "<img src='administrator/slideshowimages/middle_thumb/".$photlists[$i]["image_name"]."'>";
		   echo "<div class='caption elemHover fromLeft'>".$photlists[$i]["photo_description"]."</div>";
		   echo "</div>";
		   
		   
		   
		 }
 
?>
 
               </div><!-- #pix_diapo -->
                
        </div>
    
    
    </section> 
 
</td>
</tr>
</table>

<div id="slide-shadow" align="center">&nbsp;</div>
</div>
</body>
</html>
