<?php include("includes/header.php"); ?>
<!--slide-->
<?php include("includes/sidebar_common.php"); ?>	

    <div id="secondarycontent">
    <div class="secondarycont">  

<div class="secondarycontenttop">
            <div class="contenttitle">Recent Projects</div>
<br>
<div class="normaltext" style="padding-bottom:60px;">
  <?php 
  		insert_update_item_hit_count(-1,"projects","projects");
			$contents = get_page_contents("projects");
	        $page_contents = $contents['page_contents'];
			 //echo $page_contents;
			 
			 echo "Our recent projects in chennai";
			 			 
			?>
			</div>
			</div>
			
			<br><br><br>
			
			 <?php
  
     $projectlists = get_photo_list('homeslideshow');
	
	if($projectlists)
	 {
	    for($i=0;$i<count($projectlists);$i++)
		{
		   $short_desc = substr($projectlists[$i]['photo_description'],0,500);
		   echo '<div id="test-text"><table cellspacing="0" cellpadding="0" width="96%" align="center" style="margin:auto;">
		   <tr><td class="secondlevelheading">'.$projectlists[$i]['title'].'</td></tr>
		   <tr>
		   <td style="padding-right:10px;" width="15%"><ul class="enlarge" ><img src="administrator/slideshowimages/'.$projectlists[$i]['image_name'].'" height="300" width="700"></ul></td>
</tr>

<tr><td class="normaltext">'.$short_desc.'</td></tr>

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
