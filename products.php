<?php include("includes/header.php"); ?>
<!--slide-->
<?php include("includes/sidebar_common.php"); ?>	

    <div id="secondarycontent">
    <div class="secondarycont">  

<div class="secondarycontenttop">
            <div class="contenttitle">Products</div>
<br>
<div class="normaltext">
  <?php 
  		insert_update_item_hit_count(-1,"products","products");
			$contents = get_page_contents("products");
	        $page_contents = $contents['page_contents'];
			 echo $page_contents;
			 			 
			?>
			</div>
			</div>
			
			<br>
			
			 <?php
  
     $projectlists = get_project_list();
	
	if($projectlists)
	 {
	    for($i=0;$i<count($projectlists);$i++)
		{
		   $short_desc = substr($projectlists[$i]['description'],0,400);
		   echo '<div id="test-text"><table cellspacing="0" cellpadding="0" width="96%" align="center" style="margin:auto;">
		   <tr>
		   <td style="padding-right:10px;" width="15%"><ul class="enlarge" ><img src="administrator/project_image/'.$projectlists[$i]['image_name'].'" height="150" width="200"></ul></td>
<td valign="top">

<table border="0" cellpadding="0" cellpadding="0" width="100%">
<tr><td class="secondlevelheading">'.$projectlists[$i]['title'].'</td></tr>
<tr><td class="normaltext">'.$short_desc.'</td></tr>
<tr><td align="right"><br><div class="desc"><p><a href="productdetails.php?id='.$projectlists[$i]['id'].'"><img src="images/details_button1.png" /></a></p></div></td></tr>
</table>





</td>		   
</tr>
	   
		   </table></div><br>';
		   
		   
		   
		   
		 }
	 }
  
  ?>
  </div></div>

</div>

<?php include("includes/footer.php"); ?>
