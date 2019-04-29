<?php include("includes/header.php"); ?>
<!--slide-->
<?php include("includes/sidebar_common.php"); ?>	

    <div class="second_colomn">
    <div class="inner_content">   
    
<div class="pro_heading"><h1>Media News</h1></div>

<div class="normaltext">
  <?php 
			insert_update_item_hit_count(-1,"media","media");
			$contents = get_page_contents("media");
	        $page_contents = $contents['page_contents'];
			 echo $page_contents;
			?>
</div>

<?php

$pagelists = get_medianews_Latest();
	
	if($pagelists)
	 {
for($i=0;$i<count($pagelists);$i++)
		{
		
		$short_desc = $pagelists[$i]['description'];	
		
	 echo '
	 
	 <div id="section">
<table width="97%" class="media_table">
<tr>
<td align="left" valign="top">
<div class="customer-icon">
<ul class="enlarge" >
<img src="administrator/news_image/'.$pagelists[$i]['image_name'].'" width="200" height="200" /></ul></div>
</td>

<td align="left">
<div class="blockquote"><p>'.$pagelists[$i]['title'].' <div class="time">'.$pagelists[$i]['publish_date'].'</div></p>
<div id="customer-name" class="normaltext" style="font-weight:none;">'.$short_desc.'</div>
</div>
</td>
</tr>
</table>
</div><br>
	 
	 
	 ';
	 }
}
?>
</div>

</div>
       
<div class="clear"></div>
</div>
</div>

<?php include("includes/footer.php"); ?>
