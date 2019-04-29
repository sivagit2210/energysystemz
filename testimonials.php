<?php include("includes/header.php"); ?>
<!--slide-->
<table width="100%">
<tr>
<!--left-colomn1-->
  <td align="left" width="20%" valign="top" style="border:0px solid #666666;">
     <?php include("includes/sidebar_common.php"); ?>			
  </td>
  
<!--right-colomn-->  
<td width="80%" valign="top">

<table border="0">
<tr>
<td style="padding-left:10px;">
<br>
<div class="divcontentarea">
<h2 class="frtlevelheading">Testimonials</h2>
<br>
<div class="normaltext">
  <?php 
			insert_update_item_hit_count(-1,"testimonials","testimonials");
			$contents = get_page_contents("testimonials");
	        $page_contents = $contents['page_contents'];
			 echo $page_contents;
			?>
</div>
<br>

<?php

$pagelists = get_Testimonials_Latest();
	
	if($pagelists)
	 {
for($i=0;$i<count($pagelists);$i++)
		{
		
		$short_desc = $pagelists[$i]['desc_comments'];	
		
	 echo '
	 
	 <div id="section">
<table width="100%">
<tr>
<td align="left" valign="top"><div class="customer-icon"><img src="administrator/news_image/thumbs/'.$pagelists[$i]['photo_name'].'" width="100" height="100" /></div></td><td valign="top"><img style="padding:10px 0 0 0;" src="images/tooltip-front.gif" width="6" height="13"/></td><td><div class="blockquote"><p>'.$short_desc.'</p>
<div id="customer-name">-'.$pagelists[$i]['name'].'</div>
</div>
</td>
</tr>
</table>
</div><br>
	 
	 
	 ';
	 }
}
?>
</td>
</tr>
</table>




<!--Featured-products-->

</td>
</tr>
<!--footer-top-->

</table>
</div>

<?php include("includes/footer.php"); ?>
