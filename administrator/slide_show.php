<!--include header menu-->
<?php include("includes/header.php"); ?>

	<tr>
	<td>
	
	<table border="0" width="100%" cellpadding="0" cellspacing="10" style="height:426px;">
	<tr>
	<td width="15%" valign="top"><?php include("includes/menu.php");?></td>
	<td valign="top">
	<h2 class="heading_admin">Manage Projects</h2>
	
	<?php 
	$delete = @$_GET['delete'];
	$category = @$_GET['cat'];
	
	if($category)
	{
	  $imgCategory = $category;
	}
	else
	{
	  $imgCategory = "homeslideshow";
	}
	
	if($delete)
	{
	  delete_record_by_id('ourlook_photos',$delete);
	}	
	
	infrastructure_photos(4,$imgCategory);
	
	$pagelists = get_photo_list($imgCategory);
	
	if($pagelists)
	 {
	    echo "<table border='0' class='border2'>";
		echo "<tr><th width='5%'>S.No</th><th>Title</th><th width='5%'>Preview</th><th width='5%'>Delete</th></tr>";
		
		for($i=0;$i<count($pagelists);$i++)
		{
		   echo "<tr onmouseover='this.className=\"tblmouseover\"'  onmouseout='this.className=\"tblmouseout\"'><td>".($i+1)."</td><td>".$pagelists[$i]['title']."</td><td><img src='slideshowimages/middle_thumb/".$pagelists[$i]['image_name']."' height='50' width='75'><td align='center'><a href='slide_show.php?delete=".$pagelists[$i]['id']."&cat=".$imgCategory."' onclick='return confirmSubmit()'>Delete</a></td></tr>";
		   
		 }
	   echo "</table>";
	 }
	
	?>
	</td>
	</tr>
	</table>
	
	
	</td>
	</tr>	
	

   <!--include footer menu-->
<?php include("includes/footer.php"); ?>
